<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Playlist Song
    </title>
</head>

<body>

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    @foreach($songs as $song)
        <p> {{ $song->title }}</p>
    @endforeach
</main>

</body>
</html>
