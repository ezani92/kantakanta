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

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

Route::get('/migrate', function() {
    
    /* php artisan migrate */
    \Artisan::call('migrate');
    dd("Done");
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