<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subscription;
use App\Models\AppLogin;
use App\Models\AppUser;
use App\Models\HallUser;
use App\Models\Hall;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Mail\UserUpdated;
use App\Events\UserCreated;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $term = NULL;
        $user = User::where([
            ['name', '!=', NULL],
            [function($query) use ($request){
                if(($term = $request->term)){
                    $query->orWhere('name', 'LIKE', '%'.$term.'%')
                        ->orWhere('email', 'LIKE', '%'.$term.'%')
                        ->orWhere('role', $term)
                        ->get();
                }
            }]
        ])
            ->orderBy('id','DESC')
            ->paginate(10);
        return view('admin.users.index', compact('user'))
            ->with('i', ($request->input('page', 1) - 1) * 10)
            ->with('term', $term);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
            'phone_number' => ['required', 'number', 'min:7'],
            'role' => ['required'],
        ]);

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone_number' => $input['phone_number'],
            'role' => $input['role'] ?? 'parent',
            'password' => Hash::make($input['password']),
        ]);

        Mail::to($input['email'])->send(new WelcomeMail($input));

        // Fire an event that the user has been created
        event(new UserCreated($user));

        return view('admin.users.index')->withSuccess('New user has been created. A welcome email has been dispatched.');
    }

    public function show($id)
    {
        $user = User::find($id);
        $app = AppLogin::where('user_id', $user['id'])->get();
        $app_user = AppUser::all();
        return view('admin.users.show',compact('user', 'app', 'app_user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user)->with('id', $id);
    }

    public function update(Request $request, $id)
    {
        $user = user::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');

        if(!empty($request->input('password'))){
            $password = $request->input('password');
            $user->password = Hash::make($request->input('password'));
        } else {
            $password = 'Unchanged';
        }

        $user->role = $request->input('role');
        $user->save();
        
        if($user->wasChanged()){

            $data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone_number'),
                'password' => $password,
                'role' => ucfirst($request->input('role'))
            ];

            Mail::to($request->input('email'))->send(new UserUpdated($data));
            
            return redirect()->route('admin.users.index')->with('success','User has been updated successfully');

        } else {
            return redirect()->route('admin.users.index')->with('info','No changes has been made');
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);
        // check app login
        $app = AppLogin::where('user_id', $id)->get();

        if($app){
            return redirect()->route('admin.users.index')->with('error','User have app login. Delete the app login first before delete this user');
        }
        $user->delete();
        return redirect()->route('admin.users.index')->with('success','User deleted successfully');
    }

    public function app_user(Request $request, $username)
    {
        $hall = HallUser::where('username',$username)->get();
        $app_hall = Hall::all();
        $user = AppUser::where('username', $username)->first();
        return view('admin.users.user-hall', compact('hall', 'app_hall', 'user'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function index_app(Request $request)
    {
        $user = AppUser::orderBy('id','DESC')->paginate(10);
        return view('admin.users.index-app', compact('user'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }
}
