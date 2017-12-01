<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    public function category(){
        return $this->belongsTo('App\Categories','categories_id','id');
    }
    public function order_product(){
        return $this->hasMany('App\OrderProduct','products_id','id');
    }
    public function image(){
        return $this->hasMany('App\Images','products_id','id');
    }
    public function size(){
        return $this->hasMany('App\Sizes','products_id','id');
    }
    public function color(){
        return $this->hasMany('App\Colors','products_id','id');
    }
}
