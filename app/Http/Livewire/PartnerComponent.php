<?php

namespace App\Http\Livewire;

use App\Models\Partner;
use Livewire\Component;

class PartnerComponent extends Component
{
    public $search ='';
    public function render()
    {
        $partners = Partner::whereNot('deleted', 1)
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('category', 'like', '%' . $this->search . '%');
            })
            ->paginate(5);
        return view('livewire.partner-component',[
            'partners'=>$partners,
        ]);
    }
}
