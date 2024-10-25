<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    // The attributes that are mass assignable
    protected $fillable = ['name', 'email', 'mobile', 'visa_type', 'message'];
}
