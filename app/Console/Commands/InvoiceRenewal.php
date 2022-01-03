<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Payment;
use App\Notifications\SubscriptionRenewal;
use Carbon\Carbon;

class InvoiceRenewal extends Command
{
    protected $signature = 'invoice:renew';

    protected $description = 'Send invoice renewal';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $date = Carbon::now()->subDays(30);

        // check for overdue invoice
        $renewals = Payment::where('is_renewal', 1)
            //->where('subscription_id', '6')
            ->where('paid', 0)
            ->where('status', 'due')
            ->where('updated_at', '>=', $date) // only last 30 days records
            ->get();

        if(!$renewals)
        {
            $this->info('No overdue invoice to be send.');
            
        } else {

            foreach ($renewals as $renewal) {
                $renewal->user->notify(new SubscriptionRenewal($renewal));
                $this->info('Sent renewal invoice to '.$renewal->user->email);
            }
             
            $this->info('Successfully sent renewal invoice to everyone.');
        }
    }
}
