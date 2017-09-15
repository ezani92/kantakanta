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



Auth::routes();



Route::middleware(['isadmin'])->group(function () {
    
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/admin/user', 'AdminController@list');
    Route::POST('/admin/user', 'AdminController@store');
    Route::get('/admin/user/add', 'AdminController@add');
    Route::get('/admin/user/{user}', 'AdminController@show');
    Route::get('/admin/user/{user}/delete', 'AdminController@destroy');
    Route::get('/admin/order', 'AdminOrderController@index');
    Route::get('/admin/product/', 'ProductController@index');
    Route::get('/admin/product/add', 'ProductController@create');
    Route::POST('/admin/product', 'ProductController@store');
    
});

Route::middleware(['isdoctor'])->group(function () {
    
    Route::get('/doctor', 'DoctorController@index');
    Route::get('/doctor/order', 'OrderController@index');
    Route::get('/doctor/order/add', 'OrderController@add');
    Route::get('/doctor/order/{order}', 'OrderController@show');
    Route::POST('/doctor/order', 'OrderController@store');
    
});