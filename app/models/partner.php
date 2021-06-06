<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    //
    protected $table = 'partners';
    protected $fillable = ['description_en', 'description_ar', 'image','url'];

}
