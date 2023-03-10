<?php
use App\Http\Controllers\PlaylistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;




Route::get("/admin",[AdminController::class,"index"])->name("admin")->middleware("admin");
Route::get('/admin/albums',[AdminController::class,"albums"])->name("admin.albums")->middleware("admin");
Route::get('/admin/artists',[AdminController::class,"artists"])->name("admin.artists")->middleware("admin");
Route::get('/admin/Genres',[AdminController::class,"Genres"])->name("admin.Genres")->middleware("admin");



Route::post("/admin/songs",[AdminController::class,"store"])->name("admin.songs")->middleware("admin");
Route::get("/admin/songs",[AdminController::class,"songs"])->name("admin.songs")->middleware("admin");




Route::get('/admin/comments',[AdminController::class,"comments"])->name("admin.comments")->middleware("admin");
Route::patch('/admin/comments/{comment}/archive',[AdminController::class,"archiveComment"])->name("admin.comments.update")->middleware("admin");
Route::patch('/admin/comments/{comment}/unarchive',[AdminController::class,"unArchiveComment"])->name("admin.comments.update")->middleware("admin");
