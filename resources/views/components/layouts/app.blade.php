<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css'])
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>

    <header class="bg-pgreen grid grid-cols-2 px-8 py-2">
        <a href="/" class="font-bold">Frendnary</a>
        <nav>
            <div class="flex justify-end space-x-2">
                <x-link location="/signin" color="transparent">Sign In</x-link>
                <x-link location="/signup">Sign Up</x-link>
            </div>
        </nav>
    </header>

    <body class="w-full h-screen">
        {{ $slot }}
    </body>
</html>
