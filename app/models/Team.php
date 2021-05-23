<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $fillable = ['name_en', 'name_ar', 'email', 'specialization_en','specialization_ar', 'image','telephone'];
    
}
