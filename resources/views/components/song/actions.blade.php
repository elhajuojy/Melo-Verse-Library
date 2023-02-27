<section class="play-section bg-spPrimary-400 w-full">
    <div class="actions  text-spGreen flex items-center px-2 py-3 rounded mt-6 gap-6 ">
        <div class="start cursor-pointer ">
            <i class="fa-duotone fa-play fa-2x" ></i>
        </div>
        <div class="download cursor-pointer">
            <i class="fa-solid fa-circle-down fa-lg"></i>
        </div>

        @php
        $songRating = \App\Models\Rate::where("song_id", $song->id)->where("user_id", Auth::user()->id)->first() ;
        @endphp

        <div class="detect-hover">
            <sl-rating label="Rating" value="{{ $songRating->rate ?? 0 }}"></sl-rating>
            <input id="rate_song" value="{{ $song->id }}" type="hidden">
            <input id="user_rating" value="{{ Auth::user()->id }}" type="hidden">
        </div>

        <div x-data="{open:false}" class="more cursor-pointer z-50 ">
            <div  @click="open = !open" ><i class="fa-thin fa-ellipsis-stroke fa-lg"></i></div>
            <div x-show="open">
                <ul class="more-options absolute bg-spPrimary-400 text-white rounded-lg shadow-lg">
                    <li x-data="{playlist:false}" class="py-2 px-4 hover:bg-spGreen hover:text-spPrimary-400">
                        <div @click="playlist = !playlist">
                            <span  class="mr-2 ">Add to playlist</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>

                        <div x-show="playlist" class="absolute left-44 w-52 bg-spPrimary-400 text-white rounded-lg shadow-lg">
                            <ul class="playlist-options">
                                @php

                                    $playlists = Auth::user()->playlists->sortByDesc("created_at");
                                @endphp

                                @foreach($playlists  as $playlist)
                                    <li class="py-2 px-4 hover:bg-spGreen hover:text-spPrimary-400 text-sm">
                                        <form class="text-sm" method="POST" action="/playlist/add/song" >
                                            @csrf
                                            <input type="hidden" name="song_id" value="{{ $song->id }}">
                                            <input type="hidden" name="playlist_id" value="{{ $playlist->id }}">
                                            <button class="flex items-center gap-2">
                                                <i class="fa-solid fa-plus"></i>
                                                <span>{{ $playlist->name }}</span>
                                            </button>
                                        </form>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li class="py-2 px-4 hover:bg-spGreen hover:text-spPrimary-400">Add to queue</li>
                    <li class="py-2 px-4 hover:bg-spGreen hover:text-spPrimary-400">Add to favorites</li>
                    <li class="py-2 px-4 hover:bg-spGreen hover:text-spPrimary-400">Add to library</li>
                </ul>
            </div>
        </div>
    </div>
</section>
