<?php

namespace App\Http\Livewire;

use App\Models\Friend;
use Livewire\Component;

class FriendComponent extends Component
{
    public $search ='';
    public function render()
    {
        $friends = Friend::whereNot('deleted', 1)
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('title', 'like', '%' . $this->search . '%');
            })
            ->get();
        return view('livewire.friend-component',[
            'friends'=>$friends,
        ]);
    }
}
