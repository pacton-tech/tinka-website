<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Plan;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscription = Subscription::all();
        return view('subscription.index',compact('subscription'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $subscription = Subscription::find($id);
        $renewal = Payment::where('is_renewal', 1)
            ->where('subscription_id', $subscription->id)
            ->where('paid', 'true')
            ->first();
        return view('subscription.show',compact('subscription','renewal'));
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

    /**
     * Renew the subscription
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function renew($id)
    {
        $subscription = Subscription::find($id);
        $plan = Plan::where('id', $subscription->plan->id)->first();
        return view('subscription.renew',compact('plan', 'subscription'));
    }

    /**
     * Show available upgrade for the subscription
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function upgrade($id)
    {
        $subscription = Subscription::find($id);
        $plan = Plan::where('category', $subscription->plan->category)
            ->where('minimum_subject', '>', $subscription->plan->minimum_subject)
            ->get();
        return view('subscription.upgrade',compact('plan'));
    }
}
