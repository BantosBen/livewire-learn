<div>
    <input wire:model="name" type="text">
    <br>
    <input type="checkbox" wire:model="loud">
    <br>
    <select wire:model="greetings" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>
    <br>
    <form action="#" wire:submit.prevent="resetName('Bantos Ben')">
        <button type="submit">Reset Name</button>
    </form>

    <br>
    <br>
    <br>
    <br>
    {{ implode(', ', $greetings) }} {{ $name }} @if ($loud)
        !
    @endif
</div>
