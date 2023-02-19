@foreach( Auth::user()->playlists as $playlist)
    <div class="music-genre" id="item-{{ $playlist->id }}">
        <a href="playlists/{{ $playlist->id }}">{{  $playlist->name }}</a>
    </div>
@endforeach

<div class="music-genre">
    <h2>Rock</h2>
</div>

<div class="music-genre">
    <h2>Hip-hop</h2>
</div>

<div class="music-genre">
    <h2>R&B</h2>
</div>

<div class="music-genre">
    <h2>Country</h2>
</div>

<div class="music-genre">
    <h2>Jazz</h2>
</div>

<div class="music-genre">
    <h2>Blues</h2>
</div>

<div class="music-genre">
    <h2>Classical</h2>
</div>

<div class="music-genre">
    <h2>Electronic</h2>
</div>

<div class="music-genre">
    <h2>Folk</h2>
</div>

<div class="music-genre">
    <h2>Indie</h2>
</div>

<div class="music-genre">
    <h2>Punk</h2>
</div>

<div class="music-genre">
    <h2>Metal</h2>
</div>

<div class="music-genre">
    <h2>Reggae</h2>
</div>

<div class="music-genre">
    <h2>Funk</h2>
</div>

<div class="music-genre">
    <h2>Soul</h2>
</div>

<div class="music-genre">
    <h2>World</h2>
</div>

<div class="music-genre">
    <h2>Latin</h2>
</div>

<div class="music-genre">
    <h2>Gospel</h2>
</div>

<div class="music-genre">
    <h2>Alternative</h2>
</div>

<div class="music-genre">
    <h2>Ambient</h2>
</div>

<div class="music-genre">
    <h2>Avant-garde</h2>
</div>

<div class="music-genre">
    <h2>Big band</h2>
</div>

<div class="music-genre">
    <h2>Bluegrass</h2>
</div>

<div class="music-genre">
    <h2>Bossa nova</h2>
</div>

<div class="music-genre">
    <h2>Cajun</h2>
</div>

<div class="music-genre">
    <h2>Caribbean</h2>
</div>

<div class="music-genre">
    <h2>Chamber</h2>
</div>

<div class="music-genre">
    <h2>Choral</h2>
</div>

<div class="music-genre">
    <h2>Christian</h2>
</div>

<div class="music-genre">
    <h2>Comedy</h2>
</div>

<div class="music-genre">
    <h2>Contemporary</h2>
</div>

<div class="music-genre">
    <h2>Dance Playlist 2 </h2>
</div>

<div class="music-genre">
    <h2>Disco</h2>
</div>

<div class="music-genre">
    <h2>Easy listening</h2>
</div>

<div class="music-genre">
    <h2>Experimental</h2>
</div>
