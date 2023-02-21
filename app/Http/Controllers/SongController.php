<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    //

    public function show(Song $song){
        return view("song",[
            "song"=>$song

        ]);
    }
}
