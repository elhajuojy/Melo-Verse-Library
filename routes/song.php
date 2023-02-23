<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Route::get("/songs/{song}",[SongController::class,"show"]);
Route::post("/songs/{song}/comments",[CommentController::class,"store"])->name("comment.store");
