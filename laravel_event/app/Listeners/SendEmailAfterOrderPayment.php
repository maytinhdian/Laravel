<?php

namespace App\Listeners;

use App\Events\OrderPayment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailAfterOrderPayment implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderPayment $event): void
    {
        sleep(10);
        //Xử lý logic gửi email

        $amount = $event->order->amount;

        $note=$event->order->note;
        $content = "Amount: $amount \n Note: $note ";
        // dd($event->order);
        file_put_contents('/data.txt',$content);
    }
}
