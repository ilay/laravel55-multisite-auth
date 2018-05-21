<?php

Route::get('/', function () {
    return view('admin.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
