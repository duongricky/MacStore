<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderitems extends Model
{
    protected $table = 'orderitems';
    public function orders(){
    	return $this->belongsTo('App\orders','order_id','id');
    }
    public function products(){
    	return $this->belongsTo('App\products','product_id','id');
    }
}
