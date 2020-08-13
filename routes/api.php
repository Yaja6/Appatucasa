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



