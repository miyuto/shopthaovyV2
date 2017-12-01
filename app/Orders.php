<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    public function order_product(){
        return $this->hasMany('App\OrderProduct','orders_id','id');
    }
    public function customer(){
        return $this->belongsTo('App\Customers','customers_id','id');
    }
}
