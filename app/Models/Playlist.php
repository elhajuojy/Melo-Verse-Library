<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }
}
