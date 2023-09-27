<?php

namespace App\Http\Livewire;

use App\Models\Gallery;
use Livewire\Component;

class GallaryComponent extends Component
{
    public $search;
    public function render()
    {
        $galleries = Gallery::where('deleted', '!=', 1)
            ->where('title', 'like', '%' . $this->search . '%')
            ->paginate(5);
        return view('livewire.gallary-component',[
            'galleries'=>$galleries,
        ]);
    }
}
