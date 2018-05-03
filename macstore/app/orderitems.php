<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderitems extends Model
{
    protected $table = 'orderitems';
    return $this->belongsTo('App\orders','order_id','order_id');
    return $this->belongsTo('App\products','product_id','product_id');
}
