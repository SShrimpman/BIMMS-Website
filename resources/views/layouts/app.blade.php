<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Sintony&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased" x-bind:class="menuOpen ? 'overflow-hidden' : ''" x-data="{ menuOpen: false }" x-on:toggle-menu.window="menuOpen = $event.detail">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            {{-- Variável em que vou mostrar a minha navbar em todas as rotas menos na dashboard, porque essa está feita de forma diferente devido ao parallax --}}
            @if(Route::currentRouteName() !== 'dashboard')
                @livewire('navigationmenu')
            @endif

            <!-- Page Content -->
            <div>
                {{ $slot }}
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
