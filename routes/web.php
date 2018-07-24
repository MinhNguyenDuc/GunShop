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
    return view('admin/gun/page/test');
});


Route::resource('/admin/gunshop', 'GunController');
Route::resource('/admin/gunshop/category', 'CategoryController');


Route::resource('/client', 'ClientPageController');

Route::get('/client/category', 'ClientPageController@showCategory');

