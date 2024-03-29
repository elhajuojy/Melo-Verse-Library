<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{--overview on new songs in the header --}}

            {{-- albums overview --}}
            <div class="text-white">
                <x-albums-grid :albums="$albums"/>
            </div>
            <div class="mt-8 text-white">
                <x-artists-grid :artists="$artists" />
            </div>

            {{--songs overview --}}
            <div class=" mt-8 text-white">
                <x-songs-grid :songs="$songs"/>
            </div>
        </div>
        <x-flash/>
    </div>
</x-app-layout>
