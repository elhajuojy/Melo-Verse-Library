<x-app-layout>
{{--    search input for  search about genre --}}
    <main class="lg:w-[90%] w-[95%] m-auto mt-6">
        <div class="header w-full">
            <form class="mt-6">
                <div class="input px-4  rounded-full py-2 flex gap-6 bg-white w-[50%]">
                    <div>
                        <i class="fa-regular fa-magnifying-glass"></i>
                    </div>
                    <input name="search" placeholder="What do you want to listen to ? " class="w-full border-none outline-0" id="search">
                </div>
            </form>
        </div>
        <div class="mt-16">
            <div class="scroll-bar flex gap-4  text-spGreen overflow-x-auto  w-full">
                @foreach($songs as $song)
                    <div class="song my-3 aspect-square w-min-[15%] mb-6 h-32 ">
                        <a href="/songs/{{ $song->id }}">
                            <div>
                                <img src="{{ $song->cover }}" class="w-[80%]">
                            </div>
                            <p class="mt-4 text-xs">
                                {{ $song->title }}
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
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
        </div>
    </main>
{{--    show all genere type which i can search for --}}
</x-app-layout>
