<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

use App\invoices;


class Add_Invoices extends Notification
{
    use Queueable;

    private $invoices;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(invoices $invoices1)
    {
        $this->invoices = $invoices1;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */


    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */


    public function toDatabase($notifiable)
    {
        return [
            'id' => $this->invoices->id,
            'title'=> 'Created By',
            'user'=>Auth::user()->name

        ];
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
