<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function playlist()
    {
        return $this->belongsToMany(Playlist::class,"playlist_songs");
    }

    public  function rates(){
        return $this->hasMany(Rate::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function artist(){
        return $this->belongsTo(Artist::class);
    }

    public function album(){
        return $this->belongsTo(Album::class);
    }


    public function genres(){
        return $this->belongsToMany(Genre::class,"genre_songs");
    }




}
