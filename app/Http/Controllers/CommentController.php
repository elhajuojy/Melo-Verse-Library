<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //

    public function store(Song $song){

        \request()->validate([
            "body"=>"required"
        ]);

        $song->comments()->create([
            "user_id"=>\request()->user()->id,
            "body"=>\request("body"),
        ]);

        return back();
    }
}
