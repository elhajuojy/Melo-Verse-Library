<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    //

    public function show(\App\Models\Artist $artist){
        return view("artists.show",[
            "artist"=>$artist,
            "albums"=>$artist->albums,
            "songs"=>$artist->songs,
        ]);
    }
}
