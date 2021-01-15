<?php
use Sun\App\Route;
Route::get('/', 'MainController@index');
Route::get('/user/register', 'UserController@register');
Route::post('/user/register', 'UserController@registerProcess');
Route::get('/user/login', 'UserController@login');
Route::post('/user/login', 'UserController@loginProcess');