<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';
    public function product(){
        return $this->belongsTo('App\Products','products_id','id');
    }

    public function scopeGetImageByProductId($query,$id){
        return $query->where('products_id',$id);
    }
}
