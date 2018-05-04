<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $table = 'customers';
    public function ratings(){
	    return $this->hasMany('App\ratings','rating_id','rating_id');
    }
    public function payments(){
	    return $this->hasMany('App\payments','payment_id','payment_id');

    }
    public function customers(){
	    return $this->hasMany('App\customers','customer_id','customer_id');
    }
    public function orderitems(){
		//Liên kết đến bảng order_item
		return $this->hasManyThrough('App/orderitems','App/orders','customer_id','order_id','item_id');
    }
}
