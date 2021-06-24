<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Research extends Model
{
    protected $table = 'researchs';
    protected $fillable = ['name_en', 'name_ar','description_en', 'description_ar','meta_desc','meta_kw','image','file'];
 
    public function limit($description)
    {
        return Str::limit($description, 10 );
    }
}