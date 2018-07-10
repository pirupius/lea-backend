<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Api'], function () {

    //farmers
    Route::get('/login', 'FarmersApiController@login');
    Route::get('/register', 'FarmersApiController@register');

    //forum
    Route::get('/news', 'DemoApiController@news');

    //suppliers
    Route::get('/suppliers', 'DemoApiController@suppliers');

    //agronomists
    Route::get('/agronomists', 'DemoApiController@agronomists');

    //plant tracker
    Route::get('/tracker', 'PlantApiController@tracker');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
