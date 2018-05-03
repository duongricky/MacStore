<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ratings extends Model
{
    protected $table = 'ratings';
    return $this->belongsTo('App\customers','customer_id','customer_id');
    return $this->belongsTo('App\products','customer_id','customer_id');
}
