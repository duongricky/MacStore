<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table      = 'products';
    protected $primaryKey = 'product_id';
    public function categories(){
    	return $this->belongsTo('App\categories','category_id','id');
    }
    public function ratings(){
        return $this->hasMany('App\ratings','rating_id','id');
    }
    public function orderitems(){
        return $this->hasMany('App\orderitems','product_id','id');
    }
    public function products_detail(){
        return $this->hasOne('App\products_detail','product_id','id');
    }
}
