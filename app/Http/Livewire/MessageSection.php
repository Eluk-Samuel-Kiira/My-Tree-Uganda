<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Chat;

class MessageSection extends Component
{
    protected $listeners = [
        'refreshChats'=>'$refresh',
    ];

    public function render()
    {
        return view('livewire.message-section',[
            'chats'=>Chat::all(),
        ]);
    }
}
