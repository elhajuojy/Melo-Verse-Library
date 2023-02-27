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

    <main class="main w-[95%] mb-6 m-auto w-[95%] ">

        <x-song.cover :song="$song" />


        <x-song.actions :song="$song" />
        <x-song.lyrics :song="$song" />

        <div class="text-white">
            {!! $share !!}
        </div>

        <x-song.comments :song="$song"/>

    </main>

</x-app-layout>
