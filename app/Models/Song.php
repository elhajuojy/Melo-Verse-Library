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
}
