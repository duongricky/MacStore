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
use App\categories;
Route::get('/', function () {
    return view('welcome');
});
Route::get('demo', function () {
	$get_product = App\categories::find(2)->products->toArray();
	var_dump($get_product);exit();
});
