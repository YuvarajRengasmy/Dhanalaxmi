<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Storie extends Model
{
    protected $fillable = [
        'name',
        'photo',
        'rating',
        'review',
        
    ];
}
