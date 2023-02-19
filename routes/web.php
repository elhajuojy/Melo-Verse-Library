<?php

use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\EnsurePlaylistValidForThisUser;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/",function (){
    return view("welcome");
});

Route::get('/home', function () {
    $albums = \App\Models\Album::all();
    $songs = \App\Models\Song::all();
    return view('dashboard',[
        "albums"=>$albums,
        "songs"=>$songs
    ]);
})->middleware(["auth"])->name("home");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get("/playlists/{playlist}",[PlaylistController::class,"show"])->middleware(EnsurePlaylistValidForThisUser::class);
});



require __DIR__.'/auth.php';
