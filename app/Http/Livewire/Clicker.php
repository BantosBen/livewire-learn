<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Nette\Utils\Random;

class Clicker extends Component
{
    public $name;
    public $email;
    public $password;
    public $users = null;
    public function render()
    {
        $this->users = User::all();
        return view('livewire.clicker');
    }

    public function handleClick()
    {
        $this->name = time();
    }

    public function createUser()
    {
        User::create([
            "name" => $this->name,
            "email" => rand() . $this->email,
            "password" => $this->password
        ]);
    }
}