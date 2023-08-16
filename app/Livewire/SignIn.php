<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SignIn extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $credentials = ['email' => $this->email, 'password' => $this->password];

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('dashboard')); // or wherever you want to redirect after login
        }
    }
    public function render()
    {
        return view('livewire.sign-in');
    }
}