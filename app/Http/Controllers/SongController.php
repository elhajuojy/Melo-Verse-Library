<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Rate;
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

    public function StoreRate(){
//        TODO : check if user already rated this song and remove te old rate
        Rate::where("user_id",auth()->user()->id)->where("song_id",request()->input("song_id"))->delete();


        Rate::create([
            "user_id"=>auth()->user()->id,
            "song_id"=>request()->input("song_id"),
            "rate"=>request()->input("rating")
        ]);
        return json_decode("success");
    }
    public function rates(){
        return view("rates");
    }
}
