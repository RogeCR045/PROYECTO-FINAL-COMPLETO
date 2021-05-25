<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $fillable = [
         'image', 'songname', 'artist', 'gender', 'yearlaunch', 'album', 'socialmedia',
         'timelistening', 'letter', 'comment'
    ];
}
