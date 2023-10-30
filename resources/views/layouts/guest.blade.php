<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        {{-- Este video é aquele que eu uso no background juntamente com um filtro para escurecer o mesmo, este layout é apenas usado na rota /login --}}
        <video src="{{ asset('assets/rev@.mp4')}}" autoplay muted loop
            style="width: 100vw;
            height: 100vh;
            object-fit: cover;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: -1"></video>
        <div class="h-screen fixed object-cover inset-x-0 inset-y-0 bg-gradient-to-r from-darkBlue to-darkBlue opacity-70"></div>
        <div id="app">
            <main class="py-4">
                {{ $slot }}
            </main>
        </div>

        @livewireScripts
    </body>
</html>
