<?php

namespace  App\models;

use Illuminate\Database\Eloquent\Model;

class allnews extends Model
{
    protected $table = 'allnews';
    protected $fillable = ['description_en', 'description_ar', 'title_en','title_ar'];

}
