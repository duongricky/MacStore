<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    protected $table = 'payments';
    public function customers(){
    	//Liên kết thông qua bảng customer
    	return $this->belongsTo('App\customers','customer_id','id');
    }
}
