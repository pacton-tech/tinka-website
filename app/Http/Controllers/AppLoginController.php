<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppLogin;
use App\Models\User;
use App\Models\Hall;
use App\Models\HallUser;
use App\Models\AppUser;
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

	        $msg = 'The new username has been created.';
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

	    	$msg = 'The details has been updated.';
	        return back()->withSuccess($msg);

	    } else {
	    	$msg = 'The details cannot be updated. Please try again';
	    	return back()->withErrors($msg);
	    }
    }

    public function add_hall()
    {
        $response = Http::get('https://rtxp.pacton.tech/affixhall/internal_hall_search', [
		    'search_text' => '',
		    'offset' => 0,
		    'limit' => 50
		]);

		if($response['result'] == 'ok')
		{
			// loop each hall and save into local database
			foreach ($response['res_list'] as $value) {

				/*
				{
				    "id": 39,
				    "name": "Additional Mathematic Form 4",
				    "description": "Cikgu Halimatul",
				    "has_image": 1,
				    "has_bg_image": 1,
				    "private": 0,
				    "username": "soheil",
				    "follower_num": 0,
				    "content_num": 0,
				    "version": 1,
				    "result": "ok",
				    "error_code": 0,
				    "error_desc": ""
				}
				*/

				$hall = Http::get('https://rtxp.pacton.tech/affixhall/internal_get_hall_info', [
				    'hall_uuid' => $value['uuid']
				]);

				if($hall['result'] == 'ok')
				{
	                Hall::firstOrCreate([
	                    "hall_id" => $hall['id'],
	                    "uuid" => $value['uuid'],
	                    "name" => $hall['name'],
	                    "description" => $hall['description'],
	                    "has_image" => $hall['has_image'],
	                    "has_bg_image" => $hall['has_bg_image'],
	                    "private" => $hall['private'],
	                    "username" => $hall['username'],
	                    "follower_num" => $hall['follower_num'],
	                    "content_num" => $hall['content_num'],
	                    "version" => $hall['version']
	                ]);
	            }
            }

	        $msg = 'The class list was succesfully fetch.';
	        return back()->withSuccess($msg);

	    } else {
	    	$msg = 'Failed to fetch list of class.';
	    	return back()->withErrors($msg);
	    }
    }

    public function refresh_hall($uuid)
    {
        $response = Http::get('https://rtxp.pacton.tech/affixhall/internal_get_hall_info', [
		    'hall_uuid' => $uuid
		]);

		if($response['result'] == 'ok')
		{
			$hall = Hall::where('uuid', $uuid)->first();
	        $hall->name = $response['name'];
	        $hall->description = $response['description'];
	        $hall->has_image = $response['has_image'];
	        $hall->has_bg_image = $response['has_bg_image'];
	        $hall->private = $response['private'];
	        $hall->username = $response['username'];
	        $hall->follower_num = $response['follower_num'];
	        $hall->content_num = $response['content_num'];
	        $hall->version = $response['version'];
	        $hall->save();

            $msg = 'The class was succesfully updated.';
	        return back()->withSuccess($msg);

	    } else {
	    	$msg = 'Failed to update this class.';
	    	return back()->withErrors($msg);
	    }
    }

    public function get_follower($username)
    {
        $response = Http::get('https://rtxp.pacton.tech/affixhall/internal_query_user_following_hall', [
		    'username' => $username
		]);

		if($response['result'] == 'ok')
		{
			// loop each hall and save into local database
			foreach ($response['res_list'] as $value) {

				/*
				{
		            "uuid": "0f747b47-84c9-11ea-a559-00163e6687e7"
		        }
				*/

	            HallUser::firstOrCreate([
                    "hall_uuid" => $value['uuid'],
                    "username" => $username
                ]);
            }

	        $msg = 'The following class list was succesfully fetch.';
	        return back()->withSuccess($msg);

	    } else {
	    	$msg = 'Failed to fetch list of following class.';
	    	return back()->withErrors($msg);
	    }
    }

    public function add_user_into_hall(Request $request)
    {
    	$request->validate([
            'user_id' => 'required',
            'hall_id' => 'required',
            'username' => 'required'
        ]);

        $response = Http::get('https://rtxp.pacton.tech/affixhall/internal_affix_hall_join', [
		    'user_id' => $request->get('user_id'),
		    'hall_id' => $request->get('hall_id')
		]);

		if($response['status'] == '1' && $response['result'] == 'ok')
		{
			// get hall details
			$hall = Hall::where('hall_id', $request->get('hall_id'))->first();

	        HallUser::firstOrCreate([
                "hall_uuid" => $hall['uuid'],
                "username" => $request->get('username')
            ]);

	        $msg = 'The user has been added to this class.';
	        return back()->withSuccess($msg);

	    } else {
	    	$msg = 'Error adding the user to the class.';
	    	return back()->withErrors($msg);
	    }
    }

    public function refresh_teacher()
    {
        $response = Http::get('https://rtxp.pacton.tech/users/internal_query_users', [
		    'type' => 'teacher',
		    'offset' => 0,
		    'limit' => 100
		]);

		if($response['result'] == 'ok')
		{
			foreach ($response['res_list'] as $value) {
				AppUser::firstOrCreate([
	                "app_id" => $value['id'],
	                "username" => $value['username'],
	                "type" => "teacher"
	            ]);
			}

            $msg = 'The teacher list was succesfully updated.';
	        return back()->withSuccess($msg);

	    } else {
	    	$msg = 'Failed to update teacher list.';
	    	return back()->withErrors($msg);
	    }
    }

    public function refresh_student()
    {
        $response = Http::get('https://rtxp.pacton.tech/users/internal_query_users', [
		    'type' => 'student',
		    'offset' => 0,
		    'limit' => 100
		]);

		if($response['result'] == 'ok')
		{
			foreach ($response['res_list'] as $value) {

				AppUser::firstOrCreate([
	                "app_id" => $value['id'],
	                "username" => $value['username'],
	                "type" => "student"
	            ]);
			}

            $msg = 'The student list was succesfully updated.';
	        return back()->withSuccess($msg);

	    } else {
	    	$msg = 'Failed to update student list.';
	    	return back()->withErrors($msg);
	    }
    }
}
