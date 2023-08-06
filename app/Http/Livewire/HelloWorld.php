<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = "Angatia Benson";
    public $loud = false;
    public $greetings = ['Hello'];

    public function render()
    {
        return view('livewire.hello-world');
    }
}