<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AgentForm extends Model
{
  
    protected $fillable = ['name', 'email', 'mobile', 'support', 'message'];
}