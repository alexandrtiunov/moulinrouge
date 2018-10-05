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

Route::get('/', 'IndexController@index');
Route::get('/catalog', 'IndexController@catalog');
Route::get('/catalog/{short_name}', 'IndexController@detail');

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {

    Route::resource('products', 'Admin\AdminController');

    Route::get('categories', 'Admin\CategoryController@index');
    Route::post('categories', 'Admin\CategoryController@store');
    Route::get('category/{id}', 'Admin\CategoryController@edit');
    Route::get('category/{id}/delete', 'Admin\CategoryController@destroy');

    Route::get('/', 'Admin\DiscountController@index');
    Route::get('/{id}/edit', 'Admin\DiscountController@edit');
    Route::post('{id}/add', 'Admin\DiscountController@store');
    Route::put('{id}/update', 'Admin\DiscountController@update');

    Route::get('{id}/addphoto', 'Admin\PhotoController@addphoto');
    Route::post('{id}/addphoto', 'Admin\PhotoController@store');
    Route::put('{id}/deletephoto', 'Admin\PhotoController@destroy');

    Route::put('{id}/atribut', 'Admin\AtributController@update');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
