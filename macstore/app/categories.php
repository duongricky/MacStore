<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table = 'categories';
    //Liên kết 1 nhiều đến table many
    return $this->hasMany('App\products','category_id','category_id');
}
