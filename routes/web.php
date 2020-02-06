<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','OtherPagesController@index');
//____________________________AUTH USER_______________________________________________
Route::get('/auth/register','AuthUserController@register');
Route::get('/auth/login','AuthUserController@login');
Route::post('/auth/register','AuthUserController@store')->name('auth.register');
Route::post('/auth/login','AuthUserController@loginChecking')->name('auth.login');