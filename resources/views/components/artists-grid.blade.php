@props(["artists"])
<h1 class="text-2xl font-bold dark:text-white overflow-hidden shadow-sm sm:rounded-lg"> Best Artists </h1>
<div class="album-container mt-6 flex shrink gap-6 flex-wrap m-auto justify-between text-center text-white">
    @foreach($artists as $artist )
        @if($loop->index < 6)
            <div class="artist-card" id="{{ $artist->id }}">
                <div class="artist-img ">
                    <img src="{{ $artist->image }}" class="w-24 h-24 object-cover m-auto">
                </div>
                <div class="flex mt-4 justify-between w-full text-sm text-center">
                    <p>
                        {{ $artist->name }}
                    </p>

                </div>
            </div>
        @endif
    @endforeach
</div>
