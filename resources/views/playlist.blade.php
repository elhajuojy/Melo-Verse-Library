<x-app-layout>
{{--    playlist header --}}
     <div
         x-data="{ open: true }"
         class="lg:w-[85%] relative lg:m-auto ">
         <div
             class="header-playlist mt-6 gap-6 flex m-auto justify-end text-white">
             <div class="cover relative m-auto">
                 <div
                      class="absolute right-0 bottom-0 m-2 hover:text-spBrown cursor-pointer text-spGreen">
                     <i class="fa-solid fa-user-pen"></i>

                 </div>
                 <img src="{{ $playlist->cover }}"  class="max-w-[300px]" alt="{{ $playlist->name }}">
             </div>
             <div class="description grid m-auto gap-6 flex-1">
                 <p>Public Playlist </p>
                 <h1 class="lg:text-4xl text-xl"> {{ $playlist->name }} </h1>
                 <p class="text-gray-400 "> {{ $playlist->description }} </p>
             </div>
         </div>
         <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6 text-white">
             <table class="w-full">
               <tr class="text-left ">
                   <th class="pb-6 text-gray-400">#</th>
                   <th class="pb-6 text-gray-400">cover</th>
                   <th class="pb-6 text-gray-400">title</th>
                   <th class="pb-6 text-gray-400">duration</th>
                   <th></th>
                   <th class="pb-6 text-gray-400">year</th>

               </tr>
                 <tr class="border border-spPrimary-100 opacity-25 pb-3">
                 </tr>
                 <tr>
                     <td class="pb-3"></td>
                 </tr>
             @foreach($playlist->songs as $song)

                    <tr class="">
                        <td class="pb-3"> {{ $loop->index+1 }} </td>
                        <td class="pb-3"> <a href="/songs/{{$song->id}}" class="hover:border-b cursor-pointer"> <img src="{{ $song->cover }}"  class="w-10" alt=" {{ $song->title }}"> </a> </td>
                        <td class="pb-3"> <a href="/songs/{{$song->id}}" class="hover:border-b cursor-pointer"> {{ $song->title }} </a> </td>
                        <td class="pb-3">
                            {{ $song->duration }}
                        </td>
                        <td>
                           <div class="text-spGreen cursor-pointer">
                               <i class="fa-solid fa-heart"></i>
                           </div>
                        </td>
                        <td class="pb-3">  {{ $song->year }} </td>
                    </tr>
             @endforeach

             </table>
         </main>
         <div x-show="open" class="text-spGreen absolute top-0 left-0">
            Hello world
         </div>
     </div>

</x-app-layout>
