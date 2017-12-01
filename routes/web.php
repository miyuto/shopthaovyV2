<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('index', ['as'=>'index','uses'=>'ProductController@getAllProducts']);
Route::get('shop',function (){
    return view('layout.shop');
})->name('cua-hang');
Route::get('login',['as'=>'login','uses'=>'LoginController@loginCustomer']);
Route::post('post-login',['as'=>'post-login','uses'=>'LoginController@postLoginCustomer']);
Route::get('test',function (){
    return view('layout.test');
});
Route::post('post-signup',['as'=>'post-signup','uses'=>'LoginController@signupCustomer']);
Route::get('logout',['as'=>'logout','uses'=>'LogoutController@logoutCustomer']);
Route::get('customer-info',['as'=>'customer-info','uses'=>'CustomerInfoController@getCustomerInfo']);


