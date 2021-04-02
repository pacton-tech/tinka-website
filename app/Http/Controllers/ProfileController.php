<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TeacherProfile;
use App\Models\StudentProfile;
use App\Models\Subscription;

class ProfileController extends Controller
{
    public function profile($id)
    {
    	$user = User::find($id);

    	if($user['role'] == 'teacher')
    	{
    		$profile = TeacherProfile::where('user_id', $user['id']);
    	}

    	if($user['role'] == 'student')
    	{
    		$profile = StudentProfile::where('user_id', $user['id']);
    	}

    	if($user['role'] == '')
    	{
    		$profile = '';
    	}

    	return view('profile', compact('user', 'profile'));
    }
}
