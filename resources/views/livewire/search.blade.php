<div>
    <input type="text" wire:model="search">

    <ul class="mt-4 list-disc pl-6">
        @foreach ($languages as $language)
            <li>{{ $language->name }}</li>
        @endforeach
    </ul>
</div>
