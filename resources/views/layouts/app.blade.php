<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    @livewireStyles

    <style>
    *, ::before, ::after {
        box-sizing: border-box;
    }

    html {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    a {
        color: #10B981;
        text-decoration: unset;
        transition: color,background-color .2s;
    }

    nav {
        display: flex;
    }
    nav a {
        display: block;
        padding: 0.5rem 1.25rem;
        font-size: 1.125rem;
        font-weight: medium;
        letter-spacing: 1px;
        border-radius: 1.25rem;
    }
    nav a:hover {
        background-color: #D1FAE5;
    }

    input[type=text], textarea {
        display: block;
        width: 200px;
        padding: 0.25rem;
        border: 1px solid #D1D5DB;
        border-radius: 0.25rem;
        font-size: inherit;
        resize: none;
    }
    input[type=text]:focus, textarea:focus {
        outline: none;
    }

    .mb-4 {
        margin-bottom: 1rem;
    }
    </style>
</head>

<body>
    <nav class="mb-4">
        @foreach ([
            '/' => '計數器',
            'data-binding' => '資料綁定',
            // 'polling' => '輪詢',
            'search' => '搜尋',
        ] as $link => $label)
            <a href="{{ $link }}">{{ $label }}</a>
        @endforeach
    </nav>

    {{ $slot }}

    <!-- Scripts -->
    @livewireScripts
</body>
</html>
