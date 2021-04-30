<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Subscription;
use App\Models\Payment;
use App\Models\Plan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class CheckExpiringSubscription extends Command
{
    protected $signature = 'subscription:check';

    protected $description = 'Check for expiring subscription and create invoice';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $today = Carbon::now()->startOfMonth();
        $month_end = $today->copy()->endOfMonth()->addMonth();
        $due_date = $today->copy()->endOfMonth()->addDays(14);

        // check for overdue subscription
        $expiring = Subscription::where('subscriptions.ends_at', '>', $today)
            ->where('subscriptions.ends_at', '<', $month_end)
            ->select('subscriptions.*')
            ->get();

        if(!$expiring)
        {
            $this->info('No expiring subscription found.');
            
        } else {

            foreach ($expiring as $data) {

                $plan = Plan::find($data['plan_id']);

                if($plan['category'] != 'home-tuition' && $data['is_cancelled'] == 0)
                {
                    // check in payment table if invoice exist
                    $invoice = Payment::where('subscription_id', $data['id'])->get();

                    if(!$invoice){

                        $extra_amount = 0;
                        $subject = explode(', ', $data['subjects']);
                        $total_subject = count($subject);
                        $total_amount = $plan['price'] * $total_subject;

                        $response = Http::withBasicAuth(env('BILLPLZ_API_KEY').':', '')
                            ->post(env('BILLPLZ_URL').'v3/bills', [
                            'collection_id' => env('BILLPLZ_COLLECTION_ID'),
                            'description' => 'Renewal for '.$plan['name'],
                            'email' => $data->user->email,
                            'name' => $data->user->name,
                            'reference_1_label' => 'Student Name',
                            'reference_1' => $data['student_name'],
                            'reference_2_label' => 'Subject',
                            'reference_2' => $data['subjects'],
                            'amount' => $total_amount*100, // in cent
                            'callback_url' => env('APP_URL').'/billplz/callback',
                            'redirect_url' => env('APP_URL').'/billplz/response',
                            'due_at' => Carbon::createFromFormat('Y-m-d', $due_date)
                        ]);

                        if($response){

                            // save billplz
                            Payment::create([
                                'billplz_id' => $response['id'],
                                'user_id' => $data['user_id'],
                                'plan_id' => $plan['id'],
                                'amount' => $response['amount']/100,
                                'paid' => $response['paid'],
                                'status' => $response['state'],
                                'url' => $response['url'].'?auto_submit=true',
                                'description' => $response['description'],
                                'is_renewal' => 1,
                                'subscription_id' => $data['id']
                            ]);

                            $this->info('Create invoice for '.$data->id);

                        } else {

                            $this->info('Unable to create invoice for subscription '.$data->id);
                        }
                    } else {
                        $this->info('Invoice exist for subscription '.$data->id);
                    }
                } else {
                    $this->info('No invoice required for subscription '.$data->id);
                }
            }
             
            $this->info('Successfully execute invoice creation for expiring subscription.');
        }
    }
}
