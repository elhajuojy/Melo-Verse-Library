<?php

use App\Models\Playlist;
use App\Models\Song;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/login",function (){
    return "Login here ";
});


Route::get("/playlist/{playlist}",function (Playlist $playlist){


    return view("playlist",[
        "songs"=>$playlist->songs
    ]);

});



Route::get("/songs/{song}",function (Song $song){
//    return (string)$song->comments;
    return (string)$song->rates;
});

//get songs for user playlist
Route::get("/users/{user}",function (User $user){

    $songs = Playlist::find($user->playlists->toArray()[0]["id"]);

    return (string)$songs->songs;

});
