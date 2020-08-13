<?php

use Illuminate\Http\Request;
//admin
Route::get('administrators', 'AdministratorController@index');
Route::get('administrators/{administrator}', 'AdministratorController@show');
Route::post('administrators', 'AdministratorController@store');
Route::put('administrators/{administrator}', 'AdministratorController@update');
Route::delete('administrators/{administrator}', 'AdministratorController@delete');

//categorie

Route::get('categories', 'CategorieController@index');
Route::get('categories/{categories}', 'CategorieController@show');
Route::post('categories', 'CategorieController@store');
Route::put('categories/{categories}', 'CategorieController@update');
Route::delete('categories/{categories}', 'CategorieController@delete');


//product
Route::get('products', 'ProductController@index');
Route::get('products/{product}', 'ProductController@show');
Route::post('products', 'ProductController@store');
Route::put('products/{product}', 'ProductController@update');
Route::delete('products/{product}', 'ProductController@delete');
//dealer
Route::get('dealers', 'DealerController@index');
Route::get('dealers/{dealer}', 'DealerController@show');
Route::post('dealers', 'DealerController@store');
Route::put('dealers/{dealer}', 'DealerController@update');
Route::delete('dealers/{dealer}', 'DealerController@delete');
//store
Route::get('stores', 'StoreController@index');
Route::get('stores/{store}', 'StoreController@show');
Route::post('stores', 'StoreController@store');
Route::put('stores/{store}', 'StoreController@update');
Route::delete('stores/{store}', 'StoreController@delete');
