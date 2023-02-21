<x-app-layout>
    <main class="main w-[95%] mb-6 m-auto w-[95%] ">
        <div
            class="header-playlist mt-6 gap-6 flex m-auto justify-end text-white">
            <div class="cover relative m-auto">
                <img src="{{ $song->cover }}"  class="max-w-[200px]" alt="{{ $song->title }}">
            </div>
            <div class="description grid m-auto gap-6 flex-1">
                <p>SINGLE </p>
                <h1 class="lg:text-4xl text-xl"> {{ $song->title }} </h1 >
                <p class="text-gray-400 "> {{ $song->year }} </p>
            </div>
        </div>
        <section class="play-section bg-spPrimary-400 w-full">
            <div class="actions  text-spGreen flex items-center px-2 py-3 rounded mt-6 gap-6 ">
                <div class="start cursor-pointer ">
                    <i class="fa-duotone fa-play fa-2x" ></i>
                </div>
                <div class="like cursor-pointer">
                    <i class="fa-regular fa-heart  fa-lg"></i>
                </div>
                <div class="download cursor-pointer">
                    <i class="fa-solid fa-circle-down fa-lg"></i>
                </div>
                <div class="share cursor-pointer">
                    <i class="fa-solid fa-share fa-lg"></i>
                </div>
                <div class="more cursor-pointer">
                    <i class="fa-thin fa-ellipsis-stroke fa-lg"></i>
                </div>
            </div>
        </section>

        <section class="lg:w-[50%] w-[90%] lg:text-xl text-lg text-white mt-10">
            <h1 class="text-2xl mb-6">
                Song lyrics
            </h1>
            <p class="leading-10 tracking-wide opacity-75">
                {{ $song->lyrics }}
            </p>
        </section>

        <section class="comments">
            <div class="comment-zone mb-6 flex gap-6 mt-6">
                <div>
                    <img class="w-14 rounded-full" src="{{ Auth::user()->avatar_path  }}" alt="{{ Auth::user()->username }}">
                </div>
                <div class="flex flex-1">
                    <input placeholder="Add a comment" class="bg-spPrimary-400 w-full px-4 py-2 text-gray-200 outline-0">
                    <button class="hover:text-spPrimary-200 hover:bg-spGreen py-2 px-4 rounded bg-spPrimary-400 text-spGreen transition font-bold ease-in">Add </button>
                </div>
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
    </main>

</x-app-layout>
