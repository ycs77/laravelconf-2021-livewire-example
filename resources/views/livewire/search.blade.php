<div>
    <input type="text" wire:model="search">

    <ul>
        @foreach ($languages as $language)
            <li>{{ $language->name }}</li>
        @endforeach
    </ul>
</div>
