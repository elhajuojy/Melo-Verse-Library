<x-admin-layout>
    <section class="add song w-[90%] modal   m-auto lg:w-[80%]  mt-6  mb-6">
        <h1 class="text-3xl text-white mb-6"> Update The song  </h1>
        <form method="POST" action="{{ route('admin.songs.update',$song) }}" class="border max-w-xl mx-auto border-spPrimary-100 rounded py-2 px-4 shadow" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-6">
                <x-input-label for="title" :value="__('title')" />
                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title',$song->title)" required autofocus autocomplete="title" />
                <x-input-error class="mt-2 text-red-600" :messages="$errors->get('title')" />
            </div>
            <div class="mb-6">
                <x-input-label for="year" :value="__('year')" />
                <x-text-input id="year" name="year" type="text" class="mt-1 block w-full" :value="old('year',$song->year)" required autofocus autocomplete="year" />
                <x-input-error class="mt-2 text-red-600" :messages="$errors->get('year')" />
            </div>
            <div class="mb-6">
                <x-input-label for="audio_path" :value="__('audio')" />
                <x-text-input id="audio_path" name="audio_path" type="file" class="mt-1 block w-full" :value="old('audio_path',$song->audio_path)" required autofocus autocomplete="audio_path" />
                <x-input-error class="mt-2 text-red-600" :messages="$errors->get('audio_path')" />
            </div>
            <div class="mb-6">
                <x-input-label for="lyrics" :value="__('lyrics')" />
                <textarea class="mt-1 block w-full rounded border border-gray-300 bg-black text-white" name="lyrics" id="lyrics">
                {{ old('lyrics',$song->lyrics) }}
                </textarea>
                <x-input-error class="mt-2 text-red-600" :messages="$errors->get('lyrics')" />
            </div>
            <div class="mb-6">
                <x-input-label for="cover" :value="__('cover')" />
                <x-text-input id="cover" name="cover" type="file" class="mt-1 block w-full" :value="old('cover',$song->cover)" required autofocus autocomplete="cover" />
                <x-input-error class="mt-2 text-red-600" :messages="$errors->get('cover')" />
            </div>
            <div class="mb-6">
                <x-input-label for="artist" :value="__('artist')" />
                <select name="artist_id" class="bg-spPrimary-400 text-white rounded">
                    @php
                    $artists = \App\Models\Artist::all();
                    @endphp
                    @foreach($artists as $artist)
                    @if($artist->id == $song->artist_id)
                    <option value="{{ $artist->id }}" selected>{{ $artist->name }}</option>
                    @else
                    <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                    @endif
                    @endforeach

                </select>
                <x-input-error class="mt-2 text-red-600" :messages="$errors->get('artist')" />
            </div>
            <button type="submit" class="bg-spPrimary-400 text-white rounded py-2 px-4">Update</button>
        </form>
    </section>
    <x-flash />
</x-admin-layout>
