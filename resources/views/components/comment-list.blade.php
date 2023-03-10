@props(["comments"])
<div class="flex flex-col divide-y ">
    @foreach($comments as $comment)
        <div class="flex flex-col   p-4 rounded-lg shadow-lg">
            <div class="flex justify-between">
                <div class="flex">
                    <div class="flex flex-col">
                        <span class="text-gray-700 dark:text-gray-200 font-bold">{{ $comment->user->name }}</span>
                        <span class="text-gray-500 dark:text-gray-400 text-sm">{{ $comment->created_at->diffForHumans() }}</span>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col">
                        <span class="text-gray-700 dark:text-gray-200 font-bold">{{ $comment->song->title }}</span>
                        <span class="text-gray-500 dark:text-gray-400 text-sm">{{ $comment->song->artist->name }}</span>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <p class="text-gray-600 dark:text-gray-200 text-sm">
                    {{ $comment->body }}
                </p>
            </div>
            <div class="flex justify-between mt-4">
                <div class="flex">
                    <div class="flex flex-col">
                        <span class="text-gray-700 dark:text-gray-200 font-bold">
                            <!-- archive comment -->
                            @if($comment->archived)
                                <form action="/admin/comments/{{ $comment->id }}/unarchive" method="POST">
                                    @csrf
                                    @method("PATCH")
                                    <button type="submit" class="text-green-500 hover:text-green-600">Unarchive</button>
                                </form>
                            @else
                                <form action="/admin/comments/{{ $comment->id }}/archive" method="POST">
                                    @csrf
                                    @method("PATCH")
                                    <button type="submit" class="text-yellow-500 hover:text-yellow-600">Archive</button>
                                </form>
                            @endif

                        </span>
                        <span class="text-gray-500 dark:text-gray-400 text-sm">{{ $comment->likes }}</span>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col">
                        <span class="text-gray-700 dark:text-gray-200 font-bold">
                            <!-- delete comment -->
                            <form action="/admin/comments/{{ $comment->id }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="text-red-500 hover:text-red-600">Delete</button>
                            </form>
                        </span>
                        <span class="text-gray-500 dark:text-gray-400 text-sm">{{ $comment->dislikes }}</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- divider between comments -->

    @endforeach
</div>
