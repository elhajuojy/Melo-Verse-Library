<x-admin-layout>
    <div
    class="container lg:w-[80%] mx-auto flex flex-col items-center justify-center"
    >

    <!-- all songs  -->
    <div class="w-full mt-6">
    <button class="
        bg-spPrimary-400 text-white rounded px-4 py-2 shadow  hover:bg-spPrimary-500 transition duration-300
        ease-in-out transform hover:-translate-y-1 mb-6 hover:scale-110 active:scale-95 focus:outline-none ">
        <a href="/admin/songs/create">Add new song</a>
    </button>
        <h1 class="text-2xl mb-6 font-bold dark:text-white overflow-hidden shadow-sm sm:rounded-lg">All Songs</h1>
        <div class="mb-6 text-white ">
            <table>
                <thead>
                    <tr>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">cover </th>
                        <th class="px-4 py-2">Artist</th>
                        <th class="px-4 py-2">Album</th>
                        <th class="px-4 py-2">Year</th>
                        <th class="px-4 py-2">Duration</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($songs as $song)
                    <tr>
                        <td class="border px-4 py-2">{{ $song->title }}</td>
                        <td class="border px-4 py-2">
                            <img src="{{  asset("storage/".$song->cover) }}" alt="" class="w-12 object-cover  h-12">
                        </td>
                        <td class="border px-4 py-2">{{ $song->artist->name }}</td>
                        <td class="border px-4 py-2">{{ $song->album->name }}</td>
                        <td class="border px-4 py-2">{{ $song->year }}</td>
                        <td class="border px-4 py-2">{{ $song->duration }}</td>
                        <td class="border px-4 py-2">
                            <button class="bg-blue-500 text-white rounded px-4 py-2 shadow  hover:bg-blue-600 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 active:scale-95 focus:outline-none ">
                                <a href="/admin/songs/{{ $song->id }}/edit">Edit</a>
                            </button>
                            <span class="text-gray-700 dark:text-gray-200 font-bold">
                            <!-- archive song -->
                            @if($song->archived)
                                <form action="/admin/songs/{{ $song->id }}/unarchive" method="POST">
                                    @csrf
                                    @method("PATCH")
                                    <button type="submit" class="text-green-500 hover:text-green-600">Unarchive</button>
                                </form>
                            @else
                                <form action="/admin/songs/{{ $song->id }}/archive" method="POST">
                                    @csrf
                                    @method("PATCH")
                                    <button type="submit" class="text-yellow-500 hover:text-yellow-600">Archive</button>
                                </form>
                            @endif

                        </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mb-6">
        {{ $songs->links() }}
        </div>

    </div>

</x-admin-layout>
