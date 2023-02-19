 @props(["albums"])
<h1 class="text-2xl font-bold dark:text-white overflow-hidden shadow-sm sm:rounded-lg"> Best Albums  </h1>
<div class="album-container mt-6 flex shrink gap-6 flex-wrap m-auto justify-center text-white">
    @foreach($albums as $album )
        @if($loop->index < 6)
            <div class="album-card" id="{{ $album->id }}">
                <div class="album-img">
                    <img src="{{ $album->cover }}" class="max-h-56 min-w-[360px] h-40 object-cover">
                </div>
                <div class="flex mt-4 justify-between w-full">
                    <p>
                        {{ $album->name }}
                    </p>
                    <span class="text-gray-400">
                        {{ $album->duration }}
                    </span>
                </div>
            </div>
        @endif
    @endforeach
</div>
