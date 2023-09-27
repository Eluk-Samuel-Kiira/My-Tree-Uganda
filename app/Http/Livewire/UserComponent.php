<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserComponent extends Component
{
    public  $search;
    public function render()
    {
        $users = User::where('deleted', '!=', 1)
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%')
                    ->orWhere('phone', 'like', '%' . $this->search . '%');
            })
            ->paginate(5);

        $number_of_users = $users->count();

        return view('livewire.user-component',[
            'users'=>$users,
            'number_of_users'=>$number_of_users,
        ]);
    }
}
