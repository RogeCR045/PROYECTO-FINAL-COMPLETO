<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;

    protected $fillable = [
         'image', 'name', 'ageyears', 'profession', 'phonenumber', 'yearsworking',
         'inherited', 'description', 'commentcarr'
        ];
}
