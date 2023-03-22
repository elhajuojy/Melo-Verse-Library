<x-admin-layout>
    <main class="px-6">

        <div class=" m-auto my-6">
        <h1 class="text-2xl mb-6 font-bold dark:text-white overflow-hidden shadow-sm sm:rounded-lg">Manage Comments</h1>
        <div class="mb-6">
        <x-comment-list :comments="$comments"/>
        </div>
        {{ $comments->links() }}
        </div>
    </main>

    <x-flash />
</x-admin-layout>
