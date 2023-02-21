<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
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

    public  function create(){
        $user_id = Auth::user()->id;
        $newPlaylist = new Playlist();
        $newPlaylist->user_id = $user_id;
        $newPlaylist->name = "My Playlist ".fake()->word;
        $newPlaylist->description = fake()->sentence;
        $newPlaylist->cover = fake()->imageUrl;
        $newPlaylist->save();
        return redirect("/home")->with("message","your playlist have been Created successfully ");
    }

}
