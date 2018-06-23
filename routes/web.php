<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/farmers', 'FarmerController');
    Route::resource('/suppliers', 'SuppliersController');
    Route::resource('/agroexperts', 'AgroexpertController');
});
