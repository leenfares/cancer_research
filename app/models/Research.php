<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    protected $table = 'researchs';
    protected $fillable = ['name_en', 'name_ar','description_en', 'description_ar', 'image','file'];
    
}