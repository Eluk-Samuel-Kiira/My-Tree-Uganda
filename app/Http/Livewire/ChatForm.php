<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;

class ChatForm extends Component
{
    public $message;
    public $user_id;
    public $userSystemTime;

    public function mount(){
        $this->user_id = Auth::id();
    }

    public function  sendMessage(){
        if($this->message != ""){
            $chat = new Chat();
            $chat->user_id = $this->user_id;
            $chat->message = Crypt::encryptString($this->message);
            $chat->save();

            $this->message = "";

            $this->emit("refreshChats");

        }
    }
    public function render()
    {
        return view('livewire.chat-form');
    }
}
