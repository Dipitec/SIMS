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


//APPLICATION ROUTES
Route::get('/apply/home/user','ApplicationController@index')->name('apply.home');
Route::get('/applicant/user/basic-info','ApplicationController@basicInfo')->name('applicant.basic-info');
//Route::get('/applicant/user/education-level','ApplicationController@index')->name('applicant.basic-info');
//Route::get('/applicant/user/closest-relative','ApplicationController@index')->name('applicant.basic-info');
//Route::get('/applicant/user/attachments','ApplicationController@index')->name('applicant.basic-info');
//Route::get('/applicant/user/course-selection','ApplicationController@index')->name('applicant.basic-info');
//Route::get('/applicant/user/payment','ApplicationController@index')->name('applicant.basic-info');
//Route::get('/applicant/user/Others','ApplicationController@index')->name('applicant.basic-info');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
