<?php

namespace App\Http\Livewire;

use App\Models\Resource;
use Livewire\Component;

class DownloadResourceComponent extends Component
{
    public $search = '';
    public function render()
    {
        $resources = Resource::where('deleted', '!=', 1)
            ->where('file_descript', 'like', '%' . $this->search . '%')
            ->paginate(5);

        return view('livewire.download-resource-component', [
            'resources' => $resources,
        ]);
    }
}
