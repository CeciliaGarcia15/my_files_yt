<?php

namespace App\Livewire\Files;

use App\Models\Files;
use Livewire\Component;

class ShowFile extends Component
{
    public $id;
    public function mount($id)
    {
        $this->id = $id;
    }

    public function placeholder()
    {
        return view('components.common.loader');
    }

    public function render()
    {
        $file = Files::find($this->id);
        return view('livewire.files.show-file', ['file' => $file]);
    }
}
