<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $fillable = ['is_on_homepage','name_en', 'name_ar', 'email', 'specialization_en','specialization_ar', 'meta_desc','meta_kw','image','telephone'];
    
}
