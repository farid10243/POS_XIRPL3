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

Route::get('/', function () {
    return view('welcome');
});

Route::get('belajar', function () {
    return view('belajar');
});
Route::get('hello', function (){
    echo '<h1>zzzzzzzzzzzz</h1>';
});
Route::get('blog','BlogController@index');
Route::get('blog/about','BlogController@about');
Route::get('blog/contact','BlogController@contact');

//jalur ke controler
//Route siswa controller ke function index
Route::get('siswa', 'SiswaController@index');

Route::get('dosen', 'DosenControlle@index');

Route::resource('category', 'categorycontroller');
Route::resource('product', 'productcontroller');
Route::resource('customer', 'customercontroller');
Route::resource('order', 'ordercontroller');
Route::resource('orderdetail', 'orderdetailcontroller');