<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppLogin;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class AppLoginController extends Controller
{
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

    public function show($id)
    {
    	$app_user = AppLogin::find($id);
    	return view('profile.change-app-password', compact('app_user'));
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

	    	$msg = 'The details has bee updated.';
	        return back()->withSuccess($msg);

	    } else {
	    	$msg = 'The details cannot be updated. Please try again';
	    	return back()->withErrors($msg);
	    }
    }
}
