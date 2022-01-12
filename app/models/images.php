<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $table = 'images';
    protected $fillable = ['news_id','img_name'];

}
