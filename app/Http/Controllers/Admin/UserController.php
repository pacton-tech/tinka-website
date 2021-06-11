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

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = User::orderBy('id','DESC')->paginate(10);
        return view('admin.users.index', compact('user'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        if($validate){

            User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'role' => $input['role'] ?? 'parent',
                'password' => Hash::make($input['password']),
            ]);

            return view('admin.users.index')->withSuccess('New user has been created! Now proceed with adding the Tinka app user access');
        }
    }

    public function show($id)
    {
        $user = User::find($id);
        $app = AppLogin::where('user_id', $user['id'])->get();
        return view('admin.users.show',compact('user', 'app'));
    }

    public function edit($id)
    {
        $subscription = Subscription::find($id);
        return view('admin.subscription.edit')->with('subscription', $subscription)->with('id', $id);
    }

    public function update(Request $request, $id)
    {
        $subscription = Subscription::find($id);
        $subscription->student_name = $request->input('student_name');
        $subscription->subjects = $request->input('subjects');
        $subscription->save();
        
        return redirect()->route('admin.subscription.index')->with('success','Subcription updated successfully');
    }

    public function destroy($id)
    {
        //
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
