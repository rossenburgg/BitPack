<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Hellio\HellioChannel;
use NotificationChannels\Hellio\HellioMessage;

class OTPSMSNotification extends Notification
{
    use Queueable;


    public $otp_code;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($otp_code)
    {
        
        $this->otp_code = $otp_code;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
       return [HellioChannel::class];
    }


    public function toHellioSMS($notifiable)
    {
        return (new HellioMessage)
			->from(env('HELLIO_SENDER_ID'))
           	->content("Your BitPack verification code is: {$this->otp_code}, valid for 5 minutes. To keep your account safe, never forward this code.");
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
