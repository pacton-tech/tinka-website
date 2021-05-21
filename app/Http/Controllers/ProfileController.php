<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TeacherProfile;
use App\Models\StudentProfile;
use App\Models\Subscription;
use App\Models\AppLogin;
use Hash;

class ProfileController extends Controller
{
    public function profile($id)
    {
    	$user = User::find($id);

    	if($user['role'] == 'teacher')
    	{
    		$profile = TeacherProfile::where('user_id', $user['id'])->first();
            $app = AppLogin::where('user_id', $user['id'])->get();
            
            return view('profile', compact('user', 'profile', 'app'));
    	}

    	if($user['role'] == 'student')
    	{
    		$profile = StudentProfile::where('user_id', $user['id'])->first();
            $app = AppLogin::where('user_id', $user['id'])->get();

            return view('profile', compact('user', 'profile', 'app'));
    	}

    	if($user['role'] == 'parent' || $user['role'] == '')
    	{
            $app = AppLogin::where('user_id', $user['id'])->get();
            
    		return view('profile', compact('user', 'app'));
    	}
    }

    public function change_password($id)
    {
        return view('profile.change-password');
    }

    public function reset_password(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        $password = $request->input('password');
        $user = User::find($request->input('user_id'));

        if($user)
        {
            //Hash and update the new password
            $user->password = \Hash::make($password);
            $user->update();

            return back()->with('success','Change password was done successfully. Remember to use your new password on next login.');
        } else {
            return back()->with('fail','Unable to change your password');
        }
    }
}
