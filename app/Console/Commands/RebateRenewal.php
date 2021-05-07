<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Subscription;
use App\Models\Payment;
use App\Models\Plan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class RebateRenewal extends Command
{
    protected $signature = 'rebate:renewal';

    protected $description = 'Drop subject renewal with custom price';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $today = Carbon::now();

        // check for overdue subscription
        $expiring = Subscription::find(3);

        $extra_amount = 0;
        $subject = "Science";
        $total_subject = 1;
        $total_amount = 20;

        $plan = Plan::find(16); // SPM 1 subject

        $response = Http::withBasicAuth(env('BILLPLZ_API_KEY').':', '')
            ->post(env('BILLPLZ_URL').'v3/bills', [
            'collection_id' => env('BILLPLZ_COLLECTION_ID'),
            'description' => 'Renewal for '.$plan['name']." with rebate (RM 50)",
            'email' => $expiring->user->email,
            'name' => $expiring->user->name,
            'reference_1_label' => 'Student Name',
            'reference_1' => $expiring['student_name'],
            'reference_2_label' => 'Subject',
            'reference_2' => $subject,
            'amount' => $total_amount*100, // in cent
            'callback_url' => env('APP_URL').'/billplz/callback',
            'redirect_url' => env('APP_URL').'/billplz/response'
        ]);

        if($response){

            // save billplz
            Payment::create([
                'billplz_id' => $response['id'],
                'user_id' => $expiring['user_id'],
                'plan_id' => $plan['id'],
                'amount' => $response['amount']/100,
                'paid' => $response['paid'],
                'status' => $response['state'],
                'url' => $response['url'].'?auto_submit=true',
                'description' => $response['description'],
                'is_renewal' => 1,
                'subscription_id' => $expiring->id
            ]);

            $this->info('Create invoice for '.$expiring->id);

        } else {

            $this->info('Unable to create invoice for subscription '.$expiring->id);
        }

        $this->info('Successfully execute invoice creation for expiring subscription.');
    }
}
