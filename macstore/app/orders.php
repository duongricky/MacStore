<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $table = 'orders';
    public function customers(){
    	return $this->belongsTo('App\customers','customer_id','customer_id');
    }
    public function orderitems(){
    	return $this->hasMany('App\orderitems','order_id','order_id');
    }
}
