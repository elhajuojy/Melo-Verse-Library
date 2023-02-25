@props(["song"])
<section class="lg:w-[50%] w-[90%] lg:text-xl text-lg text-white mt-10">
    <h1 class="text-2xl mb-6">
        Song lyrics
    </h1>
    <p class="leading-10 tracking-wide opacity-75">
        {{ $song->lyrics }}
    </p>
</section>
