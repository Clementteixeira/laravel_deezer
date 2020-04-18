<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracks extends Model
{
    protected $table = 'favorite_tracks';
    protected $fillable = ['artist', 'song', 'lyrics'];
}
