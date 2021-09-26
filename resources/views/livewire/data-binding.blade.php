<div>
    <div class="input-group">
        <input type="text" wire:model="name">
    </div>

    <div class="input-group">
        <div>
            <input type="checkbox" wire:model="agree" class="inline-block">
            我同意服務條款
        </div>

        @if ($agree)
            <div class="text-green-400">哈囉~ {{ strtoupper($name) }}</div>
        @else
            <div class="text-red-500">{{ $name }} 請勾選同意服務條款</div>
        @endif
    </div>

    <ul class="mt-4 border-t pt-2 list-disc pl-6">
        @foreach ($languages as $language)
            <li>{{ $language }}</li>
        @endforeach
    </ul>
</div>
