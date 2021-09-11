<div>
    <input type="text" wire:model="name">
    <input type="checkbox" wire:model="agree">我同意服務條款

    @if ($agree)
        <div>哈囉~ {{ strtoupper($name) }}</div>
    @else
        <div>{{ $name }} 請勾選同意服務條款</div>
    @endif

    <ul>
        @foreach ($languages as $language)
            <li>{{ $language }}</li>
        @endforeach
    </ul>
</div>
