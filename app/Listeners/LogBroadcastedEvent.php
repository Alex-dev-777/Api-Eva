<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use Illuminate\Broadcasting\BroadcastEvent;

class LogBroadcastedEvent
{
    /**
     * Handle the event.
     *
     * @param  \Illuminate\Broadcasting\BroadcastEvent  $event
     * @return void
     */
    public function handle(BroadcastEvent $event)
    {
        // Log the event name and data for debugging purposes
        Log::info('Evento broadcasted: ' . json_encode($event));
    }
}
