<?php

    
Route::get('/', 'StartController@index');

Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Auth::routes();

Route::get('products/{id}', 'ProductsController@destroy');

Route::resource('products', 'ProductsController');

Route::resource('admin', 'AdminController')->middleware('auth');

Route::get('/cart', 'CartController@index')->name('cart');

Route::post('/addCart', 'CartController@add');

Route::get('deleteFromCart/{rowId}', 'CartController@delete')->name('deleteFromCart');

Route::get('orders', 'OrderController@index')->name('orders');

Route::post('acceptOrder', 'OrderController@storeOrder');

Route::get('confirmOrder/{id}', 'OrderController@confirmOrder')->name('confirmOrder');

