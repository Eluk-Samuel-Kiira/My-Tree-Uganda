<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Livewire\Component;

class TeamComponent extends Component
{
    public $search = '';

    public function render()
    {
        $team_all = Team::where('deleted','!=',1)
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('title', 'like', '%' . $this->search . '%');
            })
            ->paginate(5);

        return view('livewire.team-component',[
            'team_all'=> $team_all,
        ]);
    }
}
