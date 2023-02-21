<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SongController;
use App\Http\Middleware\EnsurePlaylistValidForThisUser;
use App\Models\Album;
use App\Models\Song;
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
    return view('dashboard',[
        "albums"=> Album::all(),
        "songs"=> Song::all()
    ]);
})->middleware(["auth"])->name("home");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get("/playlists/{playlist}",[PlaylistController::class,"show"]);
    Route::get("/songs/{song}",[SongController::class,"show"]);
    Route::get("/playlist/create",[PlaylistController::class,"create"])->name("playlist.create");
    Route::get("/search",[SearchController::class,"index"])->name("search.index");
    Route::post("/songs/{song}/comments",[CommentController::class,"store"])->name("comment.store");
});



require __DIR__.'/auth.php';
