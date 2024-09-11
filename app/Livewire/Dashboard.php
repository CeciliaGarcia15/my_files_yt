<?php

namespace App\Livewire;

use App\Models\Files;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;
    #[Title('dashboard')]
    #[Url]

    public $search;
    public function render()
    {
        $user = Auth::guard('web')->user();
        $files = Files::select('*')
            ->where('user_id', $user->id)
            ->where('title', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('livewire.dashboard', [
            'files' => $files
        ]);
    }
}
