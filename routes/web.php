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
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{article_short_name}', 'BlogController@detail');
Route::get('/catalog/{category_short_name?}/{collection_short_name?}', 'IndexController@catalog');
Route::get('/product/{category_short_name}/{short_name}', 'IndexController@detail');

Route::get('/moya-primerochnaya', 'CartController@index');
Route::post('/moya-primerochnaya', 'CartController@store');

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {

    Route::resource('products', 'Admin\AdminController');

    Route::get('categories', 'Admin\CategoryController@index');
    Route::post('categories', 'Admin\CategoryController@store');
    Route::get('category/{id}', 'Admin\CategoryController@edit');
    Route::put('category/{id}/update', 'Admin\CategoryController@update');
    Route::get('category/{id}/delete', 'Admin\CategoryController@destroy');
    Route::get('category/{id}/activ', 'Admin\CategoryController@activ');

    Route::get('/', 'Admin\DiscountController@index');
    Route::get('discount/{id}/edit', 'Admin\DiscountController@edit');
    Route::post('discount/{id}/add', 'Admin\DiscountController@store');
    Route::put('discount/{id}/update', 'Admin\DiscountController@update');

    Route::get('{id}/addphoto', 'Admin\PhotoController@addphoto');
    Route::post('{id}/addphoto', 'Admin\PhotoController@store');
    Route::put('{id}/deletephoto', 'Admin\PhotoController@destroy');
    Route::post('{id}/addarticlephoto', 'Admin\PhotoController@articleStore');

    Route::put('{id}/atribut', 'Admin\AtributController@update');

    Route::get('/collections', 'Admin\CollectionController@index');
    Route::post('/addcollection', 'Admin\CollectionController@store');
    Route::get('/deletecollection', 'Admin\CollectionController@destroy');

    Route::get('/blog', 'Admin\BlogController@index');
    Route::post('/blog', 'Admin\BlogController@store');
    Route::get('blog/{id}/edit', 'Admin\BlogController@edit');
    Route::post('blog/{id}/update', 'Admin\BlogController@update');

    Route::get('/feedbacks', 'Admin\FeedbackController@index');
    Route::post('/addfeedback', 'Admin\FeedbackController@store');
    Route::get('feedback/{id}/activ', 'Admin\FeedbackController@activ');
    Route::get('feedback/{id}/delete', 'Admin\FeedbackController@destroy');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
