<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table      = 'products';
    protected $primaryKey = 'product_id';
    public function categories(){
    	return $this->belongsTo('App\categories','category_id','category_id');
    }
    public function ratings(){
        return $this->hasMany('App\ratings','rating_id','rating_id');
    }
    public function orderitems(){
        return $this->hasMany('App\orderitems','product_id','product_id');
    }
}
