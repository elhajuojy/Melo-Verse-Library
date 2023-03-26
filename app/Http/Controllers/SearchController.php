<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Song;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $genres = Genre::all();
         return view("search",[
             "genres"=>$genres,
         ]);
    }
}
