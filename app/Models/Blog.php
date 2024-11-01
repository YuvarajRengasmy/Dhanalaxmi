<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{


    protected $fillable = [
        'title',
        'content',
        'image_one',
        'image_two',
        'image_three',
        'tags',
        'categories',
    ];

    protected $casts = [
        'tags' => 'array',
        'categories' => 'array',
    ];
}
