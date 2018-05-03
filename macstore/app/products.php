<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
    return $this->hasMany('App\ratings','rating_id','rating_id');
    return $this->hasMany('App\orderitems','product_id','product_id');
    return $this->belongsTo('App\ratings','category_id','category_id');
}
