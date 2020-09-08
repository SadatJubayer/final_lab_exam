<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// User Routes

Route::get('/login', 'UserController@loginView');
Route::post('/login', 'UserController@login');

Route::get('/resgister', 'UserController@registerView');
Route::post('/resgister', 'UserController@register');