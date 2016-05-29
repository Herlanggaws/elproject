<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::resource('admin/chain','ChainController');
Route::resource('admin/product_category','ProductCategoryController');
Route::resource('admin/product','ProductController');
Route::resource('admin/customer','CustomerController');
Route::resource('admin/owner','OwnerController');
