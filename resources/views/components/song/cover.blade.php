@props(['song'])
<div
    class="header-playlist mt-6 gap-6 flex m-auto justify-end text-white">
    <div class="cover relative m-auto">
        <img src="{{ asset($song->cover) }}"  class="max-w-[200px]" alt="{{ $song->title }}">
    </div>
    <div class="description grid m-auto gap-6 flex-1">
        <p>SINGLE </p>
        <h1 class="lg:text-4xl text-xl"> {{ $song->title }} </h1 >
        <p class="text-gray-400 "> {{ $song->year }} </p>
        <p class="text-gray-400 "> {{ $song->artist->name }} </p>

    </div>
</div>
