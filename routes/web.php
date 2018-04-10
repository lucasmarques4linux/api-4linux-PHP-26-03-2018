<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/4linux', function () {
    return view('4linux');
});

// Route::get('/users' , 'UsersController@hello');
Route::get('/users' , 'UsersController@index');
Route::post('/users' , 'UsersController@create');
Route::get('/users/{id}' , 'UsersController@find');
Route::put('/users/{id}' , 'UsersController@update');
Route::delete('/users/{id}' , 'UsersController@delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
