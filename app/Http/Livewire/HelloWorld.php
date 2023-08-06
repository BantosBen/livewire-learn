<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld extends Component
{
    public $name = "Angatia Benson";
    public $loud = false;
    public $greetings = ['Hello'];

    public function mount(Request $request, $name)
    {
        $this->name = $request->input('name', $name);
    }


    public function resetName($mName = 'Angatia')
    {
        $this->name = $mName;
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}

/**
 *boot            Runs on every request, immediately after the component is instantiated, but before any other lifecycle methods are called
 *booted	        Runs on every request, after the component is mounted or hydrated, but before any update methods are called
 *mount	        Runs once, immediately after the component is instantiated, but before render() is called. This is only called once on initial page load and never called again, even on component refreshes
 *hydrate	        Runs on every subsequent request, after the component is hydrated, but before an action is performed, or render() is called
 *hydrateFoo	    Runs after a property called $foo is hydrated
 *dehydrate	    Runs on every subsequent request, before the component is dehydrated, but after render() is called
 *dehydrateFoo	Runs before a property called $foo is dehydrated
 *updating	    Runs before any update to the Livewire component's data (Using wire:model, not directly inside PHP)
 *updated	        Runs after any update to the Livewire component's data (Using wire:model, not directly inside PHP)
 *updatingFoo	    Runs before a property called $foo is updated. Array properties have an additional $key argument passed to this function to specify changing element inside array, like updatingArray($value, $key)
 *updatedFoo	    Runs after a property called $foo is updated. Array properties have additional $key argument as above
 *updatingFooBar	Runs before updating a nested property bar on the $foo property or a multiword property such as $fooBar or $foo_bar
 *updatedFooBar	Runs after updating a nested property bar on the $foo property or a multiword property such as $fooBar or $foo_bar
 * 
 */