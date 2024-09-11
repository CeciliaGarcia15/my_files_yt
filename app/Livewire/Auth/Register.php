<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;


#[Layout('components.layouts.auth')]
class Register extends Component
{
    public $name, $email, $password, $password_confirmation;
    #[Title('Register')]

    public function render()
    {
        return view('livewire.auth.register');
    }
    public function register()
    {
        $validate = $this->validate([
            "name" => "required|min:2|max:30",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:6|max:40|confirmed"
        ]);

        $validate["password"] = Hash::make($validate["password"]);
        User::create($validate);
        session()->flash("success", "Account created successfully! Please login now");
        $this->redirectRoute('login', navigate: true);
    }
}
