<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
	public function index()
    {
        $plans = Plan::all();
        return view('plan.index',compact('plans'));
    }

    public function educentre()
    {
        $plans = Plan::whereIn('category', ['upsr', 'pt3', 'spm'])->get();
        return view('plan.index',compact('plans'));
    }

    public function home_tuition()
    {
        $plans = Plan::where('category', 'home-tuition')->get();
        return view('plan.home-tuition',compact('plans'));
    }

    public function home_tuition_show($id)
    {
        $plan = Plan::find($id);
        return view('plan.home-tuition-show',compact('plan'));
    }

    public function show($id)
    {
        $plan = Plan::find($id);
        return view('plan.show',compact('plan'));
    }

    public function create()
    {
    	$plan = Plan::create([
            'name' => 'Pro',
            'description' => 'Pro plan',
            'price' => 9.99,
            'signup_fee' => 1.99,
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'trial_period' => 15,
            'trial_interval' => 'day',
            'sort_order' => 1,
            'currency' => 'USD',
        ]);
    }

    public function checkout(Request $request)
    {
    	return view('plan.checkout');
    }
}
