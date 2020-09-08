<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// User Routes

Route::get('/login', 'UserController@loginView');
Route::post('/login', 'UserController@login');

Route::get('/register', 'UserController@registerView');
Route::post('/register', 'UserController@register');


Route::get('/admin', 'AdminController@index');