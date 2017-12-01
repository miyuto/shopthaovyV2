<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    protected $table = 'colors';
    public function product(){
        return $this->belongsTo('App\Products','products_id','id');
    }
}
