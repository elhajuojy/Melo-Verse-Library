<x-app-layout>
    @push("meta")
        <meta property="og:title" content="{{ $song->title }}">
        <meta property="og:image" content="{{ $song->cover }}">
        <meta property="og:description" content="{{ $song->lyrics }}">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="MeloVerse">
        <meta property="og:locale" content="en_US">
        <meta property="og:locale:alternate" content="fr_FR">
    @endpush

    <main class="main w-[95%] mb-6 m-auto  ">

        <x-song.cover :song="$song" />

        <div class="mt-6">
        </div>

        <div class="audio-player bg-transparent  p-4 rounded-lg">
            <audio class="w-full bg-transparent rounded-lg shadow-md" controls>
                <source class="bg-black" src="{{ asset("storage/".$song->audio_path) }}" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>


        <x-song.actions :song="$song" />
        <x-song.lyrics :song="$song" />

        <div class="text-white">
            {!! $share !!}
        </div>

        <x-song.comments :song="$song"/>

    </main>

</x-app-layout>
