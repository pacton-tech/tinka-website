<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show',compact('user'));
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
}
