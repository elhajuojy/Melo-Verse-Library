<div>
<div class="header w-full">

<div class="input px-4  rounded-full py-2 flex gap-6 bg-white w-[50%]">
    <div>
        <i class="fa-regular fa-magnifying-glass"></i>
    </div>
    <input  wire:model="search" placeholder="What do you want to listen to ? " class="w-full outline-none border-none outline-0>
</div>
</div>
<div class="text-white">
</div>
<div class="mt-16">
<div class="scroll-bar flex gap-4 py-6  text-spGreen overflow-x-auto  w-full">
    @foreach($songs as $song)
    <div class="song my-6  aspect-square w-min-[15%] mb-6 h-32 ">
        <a href="/songs/{{ $song->id }}">
            <div>
                <img src="{{ $song->cover }}" class="w-[80%]">
            </div>
            <p class="my-4 text-xs">
                {{ $song->title }}
            </p>
        </a>
    </div>
    @endforeach

</div>

</div>
