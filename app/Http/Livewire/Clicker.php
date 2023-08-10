<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Nette\Utils\Random;

class Clicker extends Component
{
    public $name = "";
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
            "name" => "Angatia" . time(),
            "email" => "angatia" . rand(100, 1000) . "@gmail.com",
            "password" => time()
        ]);


    }
}