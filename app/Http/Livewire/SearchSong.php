<?php

namespace App\Http\Livewire;

use App\Models\Song;
use Livewire\Component;
use Livewire\WithPagination;

class SearchSong extends Component
{
    use WithPagination;

    public $search ;




    public function render()
    {
        return view('livewire.search-song',[
            "songs"=> Song::latest()->where("title",'like','%'.$this->search."%")
            ->orWhere("title",'like','%'.$this->search."%")->get()
        ]);
    }
}
