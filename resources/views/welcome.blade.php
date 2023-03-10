<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite("resources/css/app.css")
    <!-- Styles -->
</head>

<body class="bg-spPrimary-400">
    <x-welcome-header />
    <!-- little representation of the  website for guests and users who are not logged in -->
    <main>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                {{--overview on new songs in the header --}}
                {{-- albums overview --}}
                <div class="text-white">
                    <x-albums-grid :albums="$albums" />
                </div>
                <!-- artist overview -->
                <div class="mt-8 text-white">
                    <x-artists-grid :artists="$artists" />
                </div>
                {{--songs overview --}}
                <div class=" mt-8 text-white">
                    <x-songs-grid :songs="$songs" />
                </div>
            </div>
        </div>
    </main>
</body>

</html>
