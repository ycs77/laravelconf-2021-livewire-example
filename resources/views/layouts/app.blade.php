<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@300;400;700;800&family=Noto+Sans+TC:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    @livewireStyles
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
</head>

<body>
    <header class="border-b border-gray-200">
        <div class="container mx-auto">
            <nav class="nav flex items-center px-4 space-x-6">
                <div class="brand">Livewire Example</div>
                <a href="/" class="@if (request()->path() === '/') active @endif">計數器</a>
                <a href="/data-binding" class="@if (request()->path() === 'data-binding') active @endif">資料綁定</a>
                <a href="/polling" class="@if (request()->path() === 'polling') active @endif">輪詢</a>
                <a href="/search" class="@if (request()->path() === 'search') active @endif">搜尋</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto p-4">
        {{ $slot }}
    </main>

    <!-- Scripts -->
    @livewireScripts
</body>
</html>
