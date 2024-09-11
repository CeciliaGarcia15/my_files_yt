<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.auth')]
class Login extends Component
{
    public $email, $password;
    #[Title('Login')]

    public function login()
    {
        $payload = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($payload)) {
            session()->regenerate();
            session()->flash('success', "Logged in successfully!");
            return $this->redirectRoute('dashboard', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
