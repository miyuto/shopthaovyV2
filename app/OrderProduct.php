<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'orders_products';
    public function product(){
        return $this->belongsTo('App\Products','products_id','id');
    }
    public function order(){
        return $this->belongsTo('App\Orders','orders_id','id');
    }
}
