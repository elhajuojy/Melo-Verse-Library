<?php

namespace App\Http\Livewire;

use App\Models\Song;
use Livewire\Component;
use Livewire\WithPagination;
use Termwind\Components\Dd;

class SearchSong extends Component
{
    use WithPagination;

    public $search ;




    public function render()
    {


        $songs = Song::latest()->where("title",'like','%'.$this->search."%")
        // ->orWhere("archived",true)
        ->orWhere("lyrics",'like','%'.$this->search."%")
        ->orWhereHas("artist",function($q){
            $q->where("name",'like','%'.$this->search."%");
        })->get();

        // $songs = Song::latest()->whereHas("artist",function($q){
        //     $q->where("name",'like','%'.$this->search."%");
        // })->get();
        // dd($songs);
        return view('livewire.search-song',[
            "songs"=> $songs
        ]);
    }
}
