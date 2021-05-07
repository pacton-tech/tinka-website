<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Subscription;
use App\Models\Payment;
use App\Models\Plan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class DropSubjectRenewal extends Command
{
    protected $signature = 'subject:drop';

    protected $description = 'Drop subject renewal custom';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $today = Carbon::now();

        // check for overdue subscription
        $expiring = Subscription::find([3,8,9,10]);

        foreach ($expiring as $data) {

            if($data['ends_at'] < $today){

                $plan = Plan::find(16); // SPM 1 subject

                if($plan['category'] != 'home-tuition' && $data['is_cancelled'] == 0)
                {
                    // check in payment table if invoice exist
                    $invoice = Payment::where('subscription_id', $data['id'])->first();

                    if($invoice){
                        $this->info('Invoice already exist for subscription '.$data->id);
                    } else {

                        $extra_amount = 0;
                        $subject = "Science";
                        $total_subject = 1;
                        $total_amount = $plan['price'];

                        $response = Http::withBasicAuth(env('BILLPLZ_API_KEY').':', '')
                            ->post(env('BILLPLZ_URL').'v3/bills', [
                            'collection_id' => env('BILLPLZ_COLLECTION_ID'),
                            'description' => 'Renewal for '.$plan['name'],
                            'email' => $data->user->email,
                            'name' => $data->user->name,
                            'reference_1_label' => 'Student Name',
                            'reference_1' => $data['student_name'],
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
                    }
                } else {
                    $this->info('No invoice required for subscription '.$data->id);
                }
            }
        }
        $this->info('Successfully execute invoice creation for expiring subscription.');
    }
}
