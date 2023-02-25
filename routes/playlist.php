<?php

use App\Http\Controllers\PlaylistController;
use Illuminate\Support\Facades\Route;

Route::get("/playlists/{playlist}",[PlaylistController::class,"show"])->name("playlist.show");
Route::patch("/playlists/{playlist}",[PlaylistController::class,"update"])->name("playlist.update");
Route::get("/playlist/create",[PlaylistController::class,"create"])->name("playlist.create");
Route::post("/playlist/add/song",[PlaylistController::class,"addSong"])->name("playlist.addSong");


