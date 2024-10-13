<div>
    <h1>Meu componente livewire</h1>
    <input wire:model.live="search" />
    <br>

    <ul>
        @foreach ($users as $user)
            <li style="display: flex; align-items: center;">
                <img src="{{ $user->avatar }}" alt="{{ $user->avatar }}" width="50" height="50">
                {{ $user->name }}
            </li>
        @endforeach
    </ul>
</div>
