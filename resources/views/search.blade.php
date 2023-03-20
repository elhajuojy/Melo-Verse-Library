<x-app-layout>
    <main class="lg:w-[90%] w-[95%] m-auto mt-6">
            <div class=". max-w-7xl">
            <livewire:search-song/>
            </div>

    </main>
    <section class="lg:w-[90%] w-[95%] m-auto mt-6">
    <div class="over-view mb-6 on songs text-3xl text-white">
                <h1> Recent searches </h1>
            </div>
            <div class="browse-all flex gap-6 flex-wrap m-auto  ">
                @foreach($genres as $gener)
                    <a href="/genres/{{ $gener->id }}">
                        <div class="cards min-w-[150px] min-h-[150px] max-w-[150px] rounded px-2 p-4 font-bold text-xl " style=" background-color: {{ fake()->hexColor() }}" id="{{ $gener->id }}">
                            {{ $gener->name }}
                        </div>
                    </a>
                @endforeach
            </div>
    </section>
{{--    show all genere type which i can search for --}}
</x-app-layout>
