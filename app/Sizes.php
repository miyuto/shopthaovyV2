<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sizes extends Model
{
    protected $table = 'sizes';
    public function product(){
        return $this->belongsTo('App\Products','products_id','id');
    }
}
