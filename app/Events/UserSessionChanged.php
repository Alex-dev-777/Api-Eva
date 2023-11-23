<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class UserSessionChanged implements ShouldBroadcast // Asegúrate de que la clase implemente ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $userId;
    public function __construct($userId)
    {
        $this->userId = $userId;
        Log::info("UserSessionChanged event fired for user: {$userId}");
    }
    public function broadcastOn(): array
    {
        return [new PrivateChannel('App.User.' . $this->userId)];
    }
}
