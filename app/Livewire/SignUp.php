<?php

namespace App\Livewire;

use App\Models\User;
use Exception;
use Livewire\Component;

class SignUp extends Component
{
    public $name;
    public $email;
    public $password;

    public function createUser()
    {
        $this->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);

        try {
            User::create([
                "name" => $this->name,
                "email" => $this->email,
                "password" => $this->password
            ]);
            session()->flash('success', 'User Created successfully!');
        } catch (Exception $e) {
            session()->flash('error', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.sign-up');
    }
}