<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $table = 'orders';
    return $this->belongsTo('App\customers','customer_id','customer_id');
    return $this->hasMany('App\orderitems','order_id','order_id');
}
