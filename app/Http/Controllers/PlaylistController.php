<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PlaylistController extends Controller
{
    //
    public function show(\App\Models\Playlist $playlist){

        if($playlist->user_id != Auth::user()->id){
            return redirect("/home")->with("message","this playlist does not exist ! ");
        }

        return view("playlist",[
            "playlist"=>$playlist,
            "script"=>"resources/js/playlist.js"
        ]);


    }
    public function update( Request $request,$playlist){
        $playlistName = $request->input('name');

        $request->validate([
            'name' => ['required', 'string', 'max:30'],

        ]);

        $play = Playlist::find($playlist);
        $play->name= $playlistName;
        $play->save();
        return Redirect::route('playlist.show',$playlist)->with('message', 'playlist updated');
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
