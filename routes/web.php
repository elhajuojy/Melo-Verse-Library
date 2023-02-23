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
    Route::get("/search",[SearchController::class,"index"])->name("search.index");
    require  __DIR__.'/playlist.php';
    require  __DIR__."/song.php";
});



require __DIR__.'/auth.php';
