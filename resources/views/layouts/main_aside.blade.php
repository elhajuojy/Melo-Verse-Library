<aside class="w-56 grid justify-center fixed bg-spPrimary-500 h-screen border border-gray-700 text-white">

    <div class="h-56 aside-header my-6  grid content-around">
        <a href="/home">
            <div class="home flex gap-6">
                <i class="fa-sharp fa-solid fa-house"></i>
                <p>Home</p>
            </div>
        </a>
        <a href="{{ route("search.index") }}">

            <div class="home flex gap-6">
                <i class="fa-solid fa-magnifying-glass"></i>
                <p>Search</p>
            </div>

        </a>
        <a href="#">

            <div class="home flex gap-6">
                <i class="fa-solid fa-send-backward"></i>
                <p>Your Library</p>
            </div>

        </a>

       <a href="#" class="mt-8">
           <div class="home flex gap-6">
               <i class="fa-solid fa-square-heart"></i>
               <p>Liked Songs</p>
           </div>
       </a>
        <a href="/playlist/create">
            <div class="home flex gap-6 ">
                <i class="fa-solid fa-square-plus"></i>
                <p>Create Playlist</p>
            </div>
        </a>

    <hr class="text-gray-50 opacity-25">
    </div>
    <div class="home  h-full mt-6 fixed relative overflow-auto playlist">
        <div class="w-full grid justify-left gap-6 mx-2 ">
            <x-list-genre/>
        </div>
    </div>
</aside>

