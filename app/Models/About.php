<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    // Define fillable properties
    protected $fillable = [
        'title_one',
        'title_two',
        'title_three',
        'description_one',
        'description_two',
        'description_three',
        'image_one',
        'image_two',
        'image_three',
       
    ];

    // Accessor for image one URL
    public function getImageOneUrlAttribute()
    {
        return $this->image_one ? asset('storage/' . $this->image_one) : null;
    }

    // Accessor for image two URL
    public function getImageTwoUrlAttribute()
    {
        return $this->image_two ? asset('storage/' . $this->image_two) : null;
    }

    // Accessor for image three URL
    public function getImageThreeUrlAttribute()
    {
        return $this->image_three ? asset('storage/' . $this->image_three) : null;
    }

    // Accessor for image four URL
   
}
