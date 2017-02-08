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

Route::get('/products', 'ProductController@getIndex');

Route::get('/products/show/{id}','ProductController@getShow');

Route::post('/products/sell/{id}','ProductController@postSell');

Route::post('/products/restock/{id}','ProductController@postRestock');

Route::get('/products/addProduct','ProductController@getShowForm');

Route::post('/product/addProduct/new','ProductController@postAdd');

Route::post('/product/delete/{id}','ProductController@postDelete');

Route::post('/edits/edit/{id}', 'ProductController@postEdit');

Route::get('/edits/edit/{id}', 'ProductController@getEdit');