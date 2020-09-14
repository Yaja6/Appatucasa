<?php

use Illuminate\Http\Request;


Route::group(['middleware' => ['cors']], function () {

    Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@authenticate');

    Route::group(['middleware' => ['jwt.verify']], function () {

        Route::post('user', 'UserController@getAuthenticatedUser');
        Route::post('logout', 'UserController@logout');
        Route::get('products', 'ProductController@index');
        Route::get('offers', 'OfferController@index');

//categories
        Route::get('categories', 'CategorieController@index');
        Route::get('categories/{categories}', 'CategorieController@show');
        Route::post('categories', 'CategorieController@store');
        Route::put('categories/{categories}', 'CategorieController@update');
        Route::delete('categories/{categories}', 'CategorieController@delete');


//product

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

//feedback
        Route::get('feedbacks', 'FeedbackController@index');
        Route::get('feedbacks/{feedback}', 'FeedbackController@show');
        Route::post('feedbacks', 'FeedbackController@store');
        Route::put('feedbacks/{feedback}', 'FeedbackController@update');
        Route::delete('feedbacks/{feedback}', 'FeedbackController@delete');

//offer


        Route::get('offers/{offer}', 'OfferController@show');
        Route::post('offers', 'OfferController@store');
        Route::put('offers/{offer}', 'OfferController@update');
        Route::delete('offers/{offer}', 'OfferController@delete');

//order
        Route::get('orders', 'OrderController@index');
        Route::get('orders/{order}', 'OrderController@show');
        Route::post('orders', 'OrderController@store');
        Route::put('orders/{order}', 'OrderController@update');
        Route::delete('orders/{offer}', 'OrderController@delete');

//sale
        Route::get('sales', 'SaleController@index');
        Route::get('sales/{sale}', 'SaleController@show');
        Route::post('sales', 'SaleController@store');
        Route::put('sales/{sale}', 'SaleController@update');
        Route::delete('sales/{sale}', 'SaleController@delete');

//store

        Route::get('stores', 'StoreController@index');
        Route::get('stores/{store}', 'StoreController@show');
        Route::post('stores', 'StoreController@store');
        Route::put('stores/{store}', 'StoreController@update');
        Route::delete('stores/{store}', 'StoreController@delete');

        //feedback

        Route::get('feedback', 'FeedbackController@index');
        Route::get('feedback/{feedback}', 'FeedbackController@show');
        Route::post('feedback', 'FeedbackController@store');
        Route::put('feedback/{feedback}', 'FeedbackController@update');
        Route::delete('feedback/{feedback}', 'FeedbackController@delete');
    });
});
