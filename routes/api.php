<?php

use Illuminate\Http\Request;

Route::namespace('Api')->group(function () {
    // Route::namespace('Admin')->prefix('admin')->group(function () {

    // });
    Route::namespace('Front')->group(function () {
        Route::get('/home','HomeController@index');
        Route::get('/product/{id}','Product\ProductController@show');

        Route::post('/cart','CartController@cart');
    });


});