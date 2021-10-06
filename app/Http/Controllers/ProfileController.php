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

    public function update_phone_number()
    {
        return view('auth.update-phone-number');
    }

    public function process_update_phone_number(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'phone_number' => 'required',
        ]);

        $phone_number = $request->input('phone_number');
        $user = User::where('email', $request->input('email'))->first();

        if($user)
        {
            $user->phone_number = $phone_number;
            $user->update();

            return back()->with('success','Your phone number has been updated. Next time you will received SMS notification on your phone for new invoice.');
        } else {
            return back()->with('fail','Unable to update your phone number. Your email does not match');
        }
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
