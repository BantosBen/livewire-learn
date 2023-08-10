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

</div>
