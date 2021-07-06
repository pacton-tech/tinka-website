<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TeacherProfile;
use Hash;
use Image;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrationteacher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirmpassword',
            'gender' => 'required',
            'birthday' => 'required',
            'qualification' => 'required',
            'teaching' => 'required',
            'subject' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();

        $user_data = [
            'name' => $input['name'],
            'email' => $input['email'],
            'role' => 'teacher',
            'password' => Hash::make($input['password'])
        ];

        $user = User::create($user_data);

        if ($request->has('photo')) {
            $avatar = $request->file('photo');
            $photo_filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(storage_path('uploads/avatars/' . $photo_filename));
        }

        if ($request->has('video')) {

            $request->validate([
                'video' => 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi|max:10000'
            ]);

            $video = $request->file('video');
            $video_filename = time() . '.' . $video->getClientOriginalExtension();
            $video->save(storage_path('uploads/video/' . $video_filename));
        }

        $profile = [
            'user_id' => $user->id,
            'gender' => $input['gender'],
            'birthday' => $input['birthday'],
            'qualification' => $input['qualification'],
            'teaching' => $input['teaching'],
            'current_school' => $input['current_school'] ?? 'N/A',
            'current_tuition' => $input['current_tuition'] ?? 'N/A',
            'subject' => $input['subject'],
            'avatar' => !empty($photo_filename) ? $photo_filename : 'default_avatar.png',
            'video' => !empty($video_filename) ? $video_filename : $input['youtube']
        ];

        $create = TeacherProfile::create($profile);

        if($create){
            return back()->with('success', 'Thanks for your registration, we will get back to you soon!');
        } else {
            return back()->with('error', 'Please fill all the required field');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
