<x-app-layout>
    <main class="main w-[95%] mb-6 m-auto w-[95%] ">


        <x-song.cover :song="$song" />

        <x-song.actions :song="$song"/>

        <x-song.lyrics :song="$song" />
        <x-song.comments :song="$song"/>
    </main>

</x-app-layout>
