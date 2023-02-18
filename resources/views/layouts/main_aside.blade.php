<aside class="w-56 grid justify-center fixed bg-gray-900 h-screen border border-gray-700 text-white">

    <div class="h-56 aside-header my-6  grid content-around">
        <a href="/home">
            <div class="home flex gap-6">
                <i class="fa-sharp fa-solid fa-house"></i>
                <p>Home</p>
            </div>
        </a>
        <a href="#">

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
        <a href="#">
            <div class="home flex gap-6">
                <i class="fa-solid fa-square-plus"></i>
                <p>Create Playlist</p>
            </div>
        </a>
    </div>
    <div class="border border-gray-800 w-full mb-6">

    </div>
    <div class="home  h-full fixed relative overflow-auto playlist">
        <div class="w-full grid justify-left gap-6 mx-2 ">
            <x-list-genre/>
        </div>
    </div>
</aside>

