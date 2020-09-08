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
Route::get('/admin/create', 'AdminController@create');
Route::post('/admin/create', 'AdminController@store');

Route::get('/admin/edit/{id}', 'AdminController@edit');
Route::post('/admin/edit/{id}', 'AdminController@update');

Route::get('/admin/delete/{id}', 'AdminController@delete');
Route::post('/admin/delete/{id}', 'AdminController@destroy');