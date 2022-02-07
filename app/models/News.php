<?php

namespace  App\models;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table = 'allnews';
    protected $fillable = ['description_en', 'description_ar', 'title_en','title_ar','featured_image'];

    public function images()
    {
        return $this->hasMany('App\models\Image');
    }
}
