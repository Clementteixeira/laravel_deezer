<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "my";
    protected $fillable = ['title','duration'];
}
