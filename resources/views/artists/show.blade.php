<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{--overview on new songs in the header --}}
            <div class="header-playlist mt-6 gap-6 flex m-auto justify-end text-white">
                <div class="cover relative m-auto">
                    <img src="{{ asset($artist->image) }}" class="max-w-[300px]" alt="{{ $artist->name }}">
                </div>
                <div class="description grid m-auto gap-6 flex-1">
                    <!-- <p>Public Playlist </p> -->
                    <h1 class="lg:text-4xl text-xl"> {{ $artist->name }} </h1>
                    <p class="text-gray-400 "> {{ $artist->description }} </p>
                </div>
            </div>
            <div class=" mt-8 text-white">
                <x-songs-grid :songs="$artist->songs"/>
            </div>
            <div class=" mt-8 text-white">
                <x-albums-grid :albums="$artist->albums"/>
            </div>
        </div>
        <x-flash/>
    </div>
</x-app-layout>
