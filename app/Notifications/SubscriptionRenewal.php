<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SubscriptionRenewal extends Notification
{
    use Queueable;

    protected $renewal;

    public function __construct($renewal)
    {
        $this->renewal = $renewal;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line($this->renewal['description'])
            ->line('It is time to renew your subscription. Please click on the link below to proceed with renewal payment.')
            ->action('Renew', $this->renewal['url'])
            ->line('Note: Please ignore this email if payment has been made. Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
