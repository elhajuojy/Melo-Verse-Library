<?php

use App\Models\Playlist;
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


