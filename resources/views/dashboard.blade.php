<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" text-2xl font-bold dark:text-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1>Welcome  Back , {{ Auth::user()->name }} </h1>
            </div>
            {{--overview on new songs in the header --}}

            {{-- albums overview --}}
            {{--songs overview --}}
        </div>
    </div>
</x-app-layout>
