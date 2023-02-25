@props(['song']);
<section class="comments">
    <div class="comment-zone mb-6 flex gap-6 mt-6">
        <div>
            <img class="w-12 rounded-full" src="{{ Auth::user()->avatar_path  }}" alt="{{ Auth::user()->username }}">
        </div>
        <form class="flex flex-1" method="POST" action="/songs/{{ $song->id }}/comments">
            @csrf
            <input name="body" placeholder="Add a comment" class="bg-spPrimary-400 w-full px-4 py-2 text-gray-200 outline-0">
            <button class="hover:text-spPrimary-200 hover:bg-spGreen py-2 px-4 rounded bg-spPrimary-400 text-spGreen transition font-bold ease-in">Add </button>
        </form>
    </div>
    <hr>
    <div class="song-comments mt-10 text-white">
        @foreach($song->comments as $comment)
            <div class="flex gap-6 items-center mt-6">
                <div  class="">
                    <img class="w-10 aspect-square  object-cover rounded-full" src="{{ $comment->user->avatar_path }}" alt="{{ $comment->user->avatar_path }}">

                </div>
                <div>
                    <div class="opacity-75 mb-2">
                        @ {{ $comment->user->username }}
                    </div>
                    {{ $comment->body }}
                </div>
            </div>
        @endforeach
    </div>
</section>
