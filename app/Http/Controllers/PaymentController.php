<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Payment;
use App\Models\Plan;
use App\Models\Subscription;
use Hash;
use Carbon\Carbon;

class PaymentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->has('user_id')){

            $request->validate([
                'user_id' => 'required',
                'plan_id' => 'required',
                'subjects' => 'required',
                'price' => 'required',
                'extra_amount' => 'required'
            ]);

            $user = User::find($request->input('user_id'));

            $name = $user['name'];
            $email = $user['email'];
            $user_id = $user['id'];

        } else {

            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users',
                'plan_id' => 'required',
                'subjects' => 'required',
                'extra_amount' => 'required',
                'price' => 'required'
            ]);

            $name = $request->input('name');
            $email = $request->input('email');

            // create new user

            $temp_password = \Str::random(8);

            $user = new User;
            $user->name = $name;
            $user->email = $email;
            $user->role = 'student';
            $user->password = Hash::make($temp_password);
            $user->api_token = \Str::random(60);

            // save user to db
            $user->save();
            $user_id = $user['id'];
        }

        $extra_amount = $request->input('extra_amount');
        $price = $request->input('price');
        $subject = implode(', ', $request->input('subjects'));
        $total_subject = count($request->input('subjects'));
        $total_amount = ($price * $total_subject) + $extra_amount;

        $input = $request->all();

        $plan = Plan::find($input['plan_id']);

        $response = Http::withBasicAuth(env('BILLPLZ_API_KEY').':', '')
            ->post(env('BILLPLZ_URL').'v3/bills', [
            'collection_id' => env('BILLPLZ_COLLECTION_ID'),
            'description' => 'Subscription for '.$plan['name'].' with subject '.$subject,
            'email' => $email,
            'name' => $name,
            'amount' => $total_amount*100, // in cent
            'callback_url' => env('APP_URL').'/billplz/callback',
            'redirect_url' => env('APP_URL').'/billplz/response'
        ]);

        /*
        {
           "id":"w4zzj6t0",
           "collection_id":"cmjft5ew",
           "paid":false,
           "state":"due",
           "amount":5000,
           "paid_amount":0,
           "due_at":"2021-3-29",
           "email":"fadli@pacton.tech",
           "mobile":null,
           "name":"FADLI SAAD",
           "url":"https://www.billplz-sandbox.com/bills/w4zzj6t0",
           "reference_1_label":"Reference 1",
           "reference_1":null,
           "reference_2_label":"Reference 2",
           "reference_2":null,
           "redirect_url":null,
           "callback_url":"http://localhostpayment/response",
           "description":"Payment for TiNKA Subscription",
           "paid_at":null
        }
        */

        if($response){

            // save billplz
            Payment::create([
                'billplz_id' => $response['id'],
                'user_id' => $user_id,
                'plan_id' => $input['plan_id'],
                'amount' => $response['amount']/100,
                'paid' => $response['paid'],
                'status' => $response['state'],
                'url' => $response['url'].'?auto_submit=true',
                'description' => $response['description'],
            ]);

            return redirect($response['url'].'?auto_submit=true');

        } else {

            return with('error', 'Unable to create subscription');
        }
    }

    public function response_billplz(Request $request)
    {
        $billplz = $request->input('billplz');;
        
        /*
        array:4 [
          "id" => "xltgy8w4"
          "paid" => "true"
          "paid_at" => "2021-04-02 21:32:13 +0800"
          "x_signature" => "4d9335b300c9956476cfd72e70f486fed60e7f340e134aef8ee8625c2bd64c7f"
        ]
        */

        // Update billplz payment

        if($billplz['paid'] == 'true'){
            $status = 'active';
        } else {
            $status = 'due';
        }

        Payment::where('billplz_id', $billplz['id'])->update([
            'paid' => $billplz['paid'],
            'status' => $status
        ]);

        $payment = Payment::where('billplz_id', $billplz['id'])->first();
        
        if($billplz['paid'] == 'true'){

            // create subscription
            Subscription::create([
                'user_id' => $payment['user_id'],
                'plan_id' => $payment['plan_id'],
                'starts_at' => Carbon::now(),
                'ends_at' => Carbon::now()->addMonth(),
                'payment_id' => $payment['id']
            ]);
        }

        return view('payment.receipt', compact('payment'));
    }

    public function callback_billplz(Request $request)
    {
        /*
        {
            :id=>"zq0tm2wc",
            :collection_id=>"yhx5t1pp",
            :paid=>true,
            :state=>"paid",
            :amount=>100,
            :paid_amount=>100,
            :due_at=>"2018-9-27",
            :email=>"tester@test.com",
            :mobile=>nil,
            :name=>"TESTER",
            :url=>"http://www.billplz-sandbox.com/bills/zq0tm2wc",
            :paid_at=>"2018-09-27 15:15:09 +0800",
            :x_signature=>"0fe0a20b8d557eeae570377783d062a3816a9ea80f368860bacfa7ec3ca4d00e"
        }
        */

        if($_POST['paid'] == 'true'){
            $status = 'active';
        } else {
            $status = 'due';
        }

        Payment::where('billplz_id', $_POST['id'])->update([
            'paid' => $_POST['paid'],
            'status' => $status
        ]);

        $payment = Payment::where('billplz_id', $_POST['id'])->first();

        if($_POST['paid'] == 'true'){

            // create subscription
            Subscription::create([
                'user_id' => $payment['user_id'],
                'plan_id' => $payment['plan_id'],
                'starts_at' => Carbon::now(),
                'ends_at' => Carbon::now()->addMonth(),
                'payment_id' => $payment['id']
            ]);
        }

        echo 'OK';
    }
}
