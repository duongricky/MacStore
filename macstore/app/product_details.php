<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_details extends Model
{
    protected $table = 'product_details';
    public function products() {
    	return $this->belongsTo('App\products','product_id','id');
    }
}
