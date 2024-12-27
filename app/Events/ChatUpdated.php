<?php

namespace App\Events;

use App\Http\Resources\ChatResource;
use App\Models\Chat;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatUpdated implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(public Chat $chat)
    {}

    public function broadcastOn(): Channel
    {
        return new Channel('private-chats.' . $this->chat->id);
    }

    public function broadcastWith(): array
    {
        return [
            'chat' => new \App\Http\Resources\ChatResource($this->chat),
        ];
    }
}
