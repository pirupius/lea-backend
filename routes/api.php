<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Api'], function () {

    //farmers
    Route::get('/login', 'FarmersApiController@login');
    Route::get('/register', 'FarmersApiController@register');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
