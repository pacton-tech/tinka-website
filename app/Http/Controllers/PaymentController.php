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
    public function create(Request $request)
    {
        if($request->has('user_id')){

            $request->validate([
                'user_id' => 'required',
                'plan_id' => 'required'
            ]);

            $user = User::find($request->input('user_id'));

            $name = $user['name'];
            $email = $user['email'];
            $user_id = $user['id'];

        } else {

            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'plan_id' => 'required'
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

        $input = $request->all();

        $plan = Plan::find($input['plan_id']);

        $response = Http::withBasicAuth(env('BILLPLZ_API_KEY').':', '')
            ->post(env('BILLPLZ_URL').'v3/bills', [
            'collection_id' => env('BILLPLZ_COLLECTION_ID'),
            'description' => 'Payment for TiNKA Subscription '.$plan['name'],
            'email' => $email,
            'name' => $name,
            'amount' => $plan['price']*100, // in cent
            'callback_url' => env('APP_URL').'payment/response'
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

        }
    }

    public function response_billplz(Request $request)
    {
        /*
        id="W_79pJDk"
        &collection_id="599"
        &paid="true"
        &state="paid"
        &amount="200"
        &paid_amount="0"
        &due_at="2020-12-31"
        &email="api@billplz.com"
        &mobile="+60112223333"
        &name="MICHAEL API"
        &metadata[id]="9999"
        &metadata[description]="This is to test bill creation"
        &url="http://billplz.dev/bills/W_79pJDk"
        &paid_at="2015-03-09 16:23:59 +0800"
        */

        // Update billplz payment
        $payment = Payment::update([
            'billplz_id' => $_POST['id'],
            'amount' => $_POST['paid_amount']/100,
            'paid' => $response['paid'],
            'status' => $_POST['state']
        ]);

        if($response['paid'] == 'true'){

            $user = User::where('email', $_POST['email'])->first();
            $plan = Payment::where('billplz_id', $_POST['id'])->first();

            // create subscription
            Subscription::create([
                'user_id' => $user['id'],
                'plan_id' => $plan['id'],
                'starts_at' => Carbon::now(),
                'ends_at' => Carbon::addMonth(),
                'payment_id' => $payment['id']
            ]);
        }

        return view('payment.receipt', compact('payment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
