<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Song;
use Illuminate\Http\Request;
use Jorenvh\Share\Share;

class SongController extends Controller
{
    //

    public function show(Song $song){
        $share  = (new Share)->page(
            "http://melo-verse-lib.test/songs/".$song->id,
            $song->title,
        )
            ->facebook()
            ->twitter()
            ->linkedin('Extra linkedin summary can be passed here')
            ->whatsapp();

        return view("song",[
            "song"=>$song,
            "share"=>$share,

        ]);
    }
}
