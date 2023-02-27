<x-app-layout>
{{--    TODO: here is the admin page where he can add new songs and genres and delete them--}}
{{--    TODO : the admin can also manage songs and
--}}
    <section class="add song w-[90%] m-auto lg:w-[80%]  mt-6  mb-6">
        <h1 class="text-3xl text-white mb-6"> Add new song </h1>
        <form method="POST" action="admin/songs" class="border max-w-xl mx-auto border-spPrimary-100 rounded py-2 px-4 shadow" enctype="multipart/form-data">
            @csrf
{{--        @method('patch')--}}
            <div  class="mb-6">
                <x-input-label for="title" :value="__('title')" />
                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" required autofocus autocomplete="title" />
                <x-input-error class="mt-2 text-red-600" :messages="$errors->get('title')" />
            </div>
            <div  class="mb-6">
                <x-input-label for="year" :value="__('year')" />
                <x-text-input id="year" name="year" type="text" class="mt-1 block w-full" :value="old('year')" required autofocus autocomplete="year" />
                <x-input-error class="mt-2 text-red-600" :messages="$errors->get('year')" />
            </div>
            <div  class="mb-6">
                <x-input-label for="audio_path" :value="__('audio')" />
                <x-text-input id="audio_path" name="audio_path" type="file" class="mt-1 block w-full" :value="old('audio_path')" required autofocus autocomplete="audio_path" />
                <x-input-error class="mt-2 text-red-600" :messages="$errors->get('audio_path')" />
            </div>
            <div  class="mb-6">
                <x-input-label for="lyrics" :value="__('lyrics')" />
                <textarea class="mt-1 block w-full rounded border border-gray-300 bg-black text-white"
                          name="lyrics"
                            id="lyrics"
                >

                </textarea>
                <x-input-error class="mt-2 text-red-600" :messages="$errors->get('lyrics')" />
            </div>
            <div  class="mb-6">
                <x-input-label for="cover" :value="__('cover')" />
                <x-text-input id="cover" name="cover" type="file" class="mt-1 block w-full" :value="old('cover')" required autofocus autocomplete="cover" />
                <x-input-error class="mt-2 text-red-600" :messages="$errors->get('cover')" />
            </div>
            <div  class="mb-6">
                <x-input-label for="artist" :value="__('artist')" />
                <select name="artist_id" class="bg-spPrimary-400 text-white rounded">
                    @php
                        $artists = \App\Models\Artist::all();
                    @endphp
                    @foreach($artists as $artist)
                        <option value="{{ $artist->id }}">{{ ucwords($artist->name) }}</option>
                    @endforeach

                </select>
                <x-input-error class="mt-2 text-red-600" :messages="$errors->get('artist')" />
            </div>
            <div class="flex items-center gap-4 mt-6">
                <x-primary-button>{{ __('Publish') }}</x-primary-button>
            </div>


        </form>
    </section>
    <x-flash/>
</x-app-layout>
