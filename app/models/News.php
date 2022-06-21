<?php

namespace  App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class news extends Model
{
    protected $table = 'allnews';
    protected $fillable = ['description_en', 'created_at','description_ar', 'title_en','title_ar','featured_image'];

    public function images()
    {
        return $this->hasMany('App\models\Image');
    }
    public function limit($description)
    {
        return Str::limit($description, 40 );
    }
}
