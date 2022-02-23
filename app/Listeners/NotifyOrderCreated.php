<?php

namespace App\Listeners;

use App\Events\orderCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;

class NotifyOrderCreated
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param \App\Events\orderCreated $event
     * @return void
     */
    public function handle(orderCreated $event)
    {
        Http::post('https://api.kavenegar.com/v1/' . env('Sms_Key') . '/verify/lookup.json?receptor=' . $event->factor->user->mobile . '&token=' . $event->factor->number . '&template=order');
    }
}
