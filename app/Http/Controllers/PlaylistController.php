<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlaylistController extends Controller
{
    //
    public function show(\App\Models\Playlist $playlist){

        if($playlist->user_id != Auth::user()->id){
            return redirect("/home")->with("message","this playlist does not exist ! ");
        }

        return view("playlist",[
            "playlist"=>$playlist
        ]);
    }

}
