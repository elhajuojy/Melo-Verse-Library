<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="https://media.pitchfork.com/photos/61d5fa911b710fb5ce48ed9f/1:1/w_600/The-Weeknd-Dawn-FM.jpg" type="image/x-icon" >

        <title> MeloVerse </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />



        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js',
                'resources/css/all.css',
                'resources/css/all.min.css'
        ])


    </head>
    <body class="font-sans antialiased bg-spPrimary-500 flex">

        @include("layouts.main_aside")
        <div class="min-h-screen  bg-gray-100 w-full ml-56 dark:bg-spPrimary-200">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
