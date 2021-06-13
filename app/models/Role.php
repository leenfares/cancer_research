<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'roles';
    protected $fillable = ['name', 'id','guard_name', 'created_at', 'updated_at'];
    
}
