<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    //

    public function index(){
        return view("admin.index",[

        ]);
    }


    public function  store(){



        $attributes =  \request()->validate([
            "title"=>"required|min:3|max:255",
            "artist_id"=>["required",Rule::exists("artists","id")],
            "year"=>"required:numeric",
            "audio_path"=>"required:mp3,mp4",
            "cover"=>"required:jpg,png,jpeg",
            "lyrics"=>"required"
        ]);

        $song_path = \request()->file("audio_path")->store("songs");
        $cover_path = \request()->file("cover")->store("covers");


        $attributes["audio_path"] = $song_path;
        $attributes["cover"] = $cover_path;
        $attributes["track"] = 1;
        $attributes["filename"] = fake()->name;
        $attributes["duration"] = 1;
        $attributes["album_id"] = 1;

        Song::create($attributes);

        return redirect()->back()->with("success","Song added successfully");

    }
    public function create(){
        return view("admin.songs.create",[
            "artists"=>\App\Models\Artist::all(),
        ]);
    }

    public function update(Request $request,\App\Models\Song $song){

        // dd($song);
        $attributes =  \request()->validate([
            "title"=>"required|min:3|max:255",
            "artist_id"=>["required",Rule::exists("artists","id")],
            "year"=>"required:numeric",
            "audio_path"=>"required:mp3,mp4",
            "cover"=>"required:jpg,png,jpeg",
            "lyrics"=>"required"
        ]);

        if(\request()->hasFile("audio_path")){
            $song_path = \request()->file("audio_path")->store("songs");
            $attributes["audio_path"] = $song_path;
        }
        if(\request()->hasFile("cover")){
            $cover_path = \request()->file("cover")->store("covers");
            $attributes["cover"] = $cover_path;
        }

        $song = Song::find($song->id);
        $song->title = $attributes["title"];
        $song->artist_id = $attributes["artist_id"];
        $song->year = $attributes["year"];
        $song->audio_path = $attributes["audio_path"];
        $song->cover = $attributes["cover"];
        $song->lyrics = $attributes["lyrics"];
        $song->save();

        return redirect()->back()->with("success","Song updated successfully");




    }

    public function edit(\App\Models\Song $song){
        return view("admin.songs.update",[
            "song"=>$song,
            "artists"=>\App\Models\Artist::all(),

        ]);
    }



    public function comments(){
        return view("admin.comments",[
            "comments"=>\App\Models\Comment::latest('created_at')->paginate(5),
        ]);
    }

    public function songs(){
        return view("admin.songs.songs",[
            "songs"=>\App\Models\Song::latest('created_at')->paginate(5),
        ]);
    }

    public function archiveComment(\App\Models\Comment $comment){
        $comment->update([
            "archived"=>true
        ]);
        return redirect()->back()->with("success","Comment archived successfully");
    }

    public function unArchiveComment(\App\Models\Comment $comment){
        $comment->update([
            "archived"=>false
        ]);
        return redirect()->back()->with("success","Comment unarchived successfully");
    }

    public function archiveSong(\App\Models\Song $song){
        $song->update([
            "archived"=>true
        ]);
        return redirect()->back()->with("success","Song archived successfully");
    }

    public function unArchiveSong(\App\Models\Song $song){
        $song->update([
            "archived"=>false
        ]);
        return redirect()->back()->with("success","Song unarchived successfully");
    }



}
