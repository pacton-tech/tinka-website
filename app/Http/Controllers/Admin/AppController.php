<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hall;
use App\Models\HallUser;
use App\Models\AppLogin;
use App\Models\AppUser;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AppController extends Controller
{
    public function index(Request $request)
    {
    	$halls = Hall::orderBy('id','DESC')->paginate(10);
    	return view('admin.hall.index', compact('halls'))->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function show(Request $request, $id)
    {
        $hall = Hall::find($id);
        $users = HallUser::where('hall_uuid', $hall->uuid)->get();
        $app_user = AppUser::all();
        return view('admin.hall.show', compact('hall', 'users', 'app_user'))->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function create_user(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'user_id' => 'required',
            'password' => 'required',
        ]);

        $user = User::find($request->input('user_id'));

        $username = $request->input('username');
        $name = $request->input('username') ?? $user['name'];
        $password = md5($request->input('password'));
        $user_id = $request->input('user_id');

        // try to create user
        /*
        username:user1
        password:e10adc3949ba59abbe56e057f20f883e
        name:Fadli Saad
        description:TInka
        type:student
        */
        $response = Http::get('https://rtxp.pacton.tech/affixreg/internal_register', [
            'username' => $username,
            'password' => $password,
            'name' => $name,
            'description' => 'Tinka',
            'type' => $request->input('type')
        ]);

        if($response['result'] == 'OK')
        {
            $app_user = new AppLogin;
            $app_user->username = $request->input('username');
            $app_user->user_id = $user_id;
            $app_user->fullname = $name;
            $app_user->type = $request->input('type');
            $app_user->password = $password;
            $app_user->save();

            $msg = 'The new username has bee created.';
            return back()->withSuccess($msg);

        } else {
            $msg = 'The username has been taken. Please create a new one.';
            return back()->withErrors($msg);
        }
    }

    public function update_user(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'user_id' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('username');
        $name = $request->input('username');
        $password = md5($request->input('password'));
        $user_id = $request->input('user_id');

        // try to change password
        /*
        username:user1
        password:e10adc3949ba59abbe56e057f20f883e
        name:Fadli Saad
        description:TInka
        type:student
        */
        $response = Http::get('https://rtxp.pacton.tech/affixreg/internal_update_user_pass', [
            'username' => $username,
            'password' => $password,
            'name' => $name,
            'description' => 'Tinka',
            'type' => $request->input('type')
        ]);

        if($response['result'] == 'ok')
        {
            $app_user = new AppLogin;
            $app_user->username = $request->input('username');
            $app_user->fullname = $name;
            $app_user->type = $request->input('type');
            $app_user->password = $password;
            $app_user->update();

            $msg = 'The details has been updated.';
            return back()->withSuccess($msg);

        } else {
            $msg = 'The details cannot be updated. Please try again';
            return back()->withErrors($msg);
        }
    }

    public function assign_user(Request $request)
    {
        $input = $request->all();

        // get app_user
        $app_user = AppUser::find($input['app_user_id']);
        $user = User::find($input['user_id']);

        AppLogin::create([
            'user_id' => $input['user_id'],
            'username' => $app_user->username,
            'fullname' => $user->name,
            'password' => Hash::make('123456'), // default temporary password
            'type' => $app_user->type
        ]);

        return back()->withSuccess('This user has been has been matched to the respective Tinka App login');
    }

}
