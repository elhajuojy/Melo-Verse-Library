<x-app-layout>
    <header class="flex justify-around text-white p-6 divide-x-0">
        <div>
            <a href="/admin/songs">Manage Songs</a>
        </div>
        <div>
            <a href="/admin/genre">Manage Genres</a>
        </div>
        <div>
            <a href="/admin/artist">Manage Artists</a>
        </div>
        <div>
            <a href="/admin/album">Manage Albums</a>
        </div>
        <div>
            <a href="/admin/comments">Manage Comments </a>
        </div>
    </header>
    <main>

        <div class="container m-auto my-6">
        <h1 class="text-2xl mb-6 font-bold dark:text-white overflow-hidden shadow-sm sm:rounded-lg">Manage Comments</h1>
        <div class="mb-6">
        <x-comment-list :comments="$comments"/>
        </div>
        {{ $comments->links() }}
        </div>
    </main>

    <x-flash />

</x-app-layout>

