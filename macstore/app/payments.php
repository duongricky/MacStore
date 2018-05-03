<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    protected $table = 'payments';
    return $this->belongsTo('App\customers','customer_id','customer_id');
    //Liên kết thông qua bảng customer
}
