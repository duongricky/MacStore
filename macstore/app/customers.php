<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $table = 'customers';
    public function ratings(){
	    return $this->hasMany('App\ratings','rating_id','id');
    }
    public function payments(){
	    return $this->hasMany('App\payments','payment_id','id');

    }
    public function customers(){
	    return $this->hasMany('App\customers','customer_id','id');
    }
    public function orderitems(){
		//Liên kết đến bảng order_item
		return $this->hasManyThrough('App/orderitems','App/orders','customer_id','order_id','id');
    }
}
