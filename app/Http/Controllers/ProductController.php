<?php

namespace App\Http\Controllers;

use App\Images;
use App\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProducts(){
        // sản phâm mới sẽ được định nghĩa = trường new = 1
        $new_products = Products::where('new',1)->get();
        dd($new_products);
    }


}
