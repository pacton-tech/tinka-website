<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Validator;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function contactPost(Request $request){
        
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required',
            'g-recaptcha-response' => 'required',
        ]);

        if ($validator->passes()){

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

        return back()->withErrors($validator)->withInput();
    }
}
