<div>
    <button wire:click="createUser">Create User</button>
    <br>
    <br>
    <label>{{ $name }}</label>
    <br>
    <br>
    <ol>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ol>
    <br>
    <br>
    <hr>
    <form action="" wire:submit="createUser">
        <input wire:model="name" type="text" placeholder="name">
        <br>
        <br>
        <input wire:model="email" type="email" placeholder="email">
        <br>
        <br>
        <input wire:model="password" type="password" placeholder="password">
        <br>
        <br>
        <br>

        <button>Create</button>
    </form>
</div>
