@props(["songs"])
<h1 class="text-2xl font-bold dark:text-white overflow-hidden shadow-sm sm:rounded-lg"> Best Songs for you  </h1>
<div class="album-container mt-6 flex shrink gap-6 flex-wrap m-auto justify-center text-white">
    @foreach($songs as $song )
        <a href="/songs/{{ $song->id }}">
            <div class="album-card" id="{{ $song->id }}">
                <div class="album-img">

                                   <img src="{{ asset("storage/".$song->cover) }}" class="max-h-56 min-w-[200px] h-32 object-cover">
                    <!-- <img src="{{ asset($song->cover) }}" class="max-h-56 min-w-[200px] h-32 object-cover"> -->
                </div>
                <div class="flex mt-4 justify-between w-full">
                    <p>
                        {{ substr($song->title,0,10) }} ...
                    </p>
                    <span class="text-gray-400">
                    {{ $song->duration }}
                </span>
                </div>
            </div>
        </a>
    @endforeach
</div>
