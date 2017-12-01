<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logoutCustomer(){
        Auth::logout();
        return redirect()->back();
    }
}
