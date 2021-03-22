<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function contactPost(Request $request){
        
        $input = $request->all();

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required'
        ]);

        Mail::send('email/contact', [
            'name' => $input['name'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'content' => $input['content']
        ],function ($message) use ($request) {
            $message->from('info@tinka.world');
            $message->to('info@tinka.world', 'Tinka Educentre')->subject($request->get('subject'));
        });

        return back()->with('success', 'Thanks for contacting us, we will get back to you soon!');

    }
}
