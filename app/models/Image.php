<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'all_images';
    protected $fillable = ['news_id','path','new_id'];

}
