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


/*
|--------------------------------------------------------------------------
| HOME ROUTE
|--------------------------------------------------------------------------
|by stanley
*/
Route::get('/','OtherPagesController@index');


/*
|--------------------------------------------------------------------------
| AUTH USER ROUTES
|--------------------------------------------------------------------------
|by stanley
*/
Route::get('/auth/register','AuthUserController@register')->name('auth.registerForm');;
Route::get('/auth/login','AuthUserController@login')->name('auth.loginForm');;
Route::post('/auth/register','AuthUserController@store')->name('auth.register');
Route::post('/auth/login','AuthUserController@loginChecking')->name('auth.login');



//APPLICATION ROUTES
Route::get('/apply/home/user/','ApplicationController@index')->name('apply.home');

/*
|--------------------------------------------------------------------------
| APPLICATION ROUTES
|--------------------------------------------------------------------------
|by stanley
*/
Route::get('/apply/home/user','ApplicationController@index')->name('apply.home');


Route::get('/applicant/user/basic-info','ApplicationController@basicInfo')->name('applicant.basic-info');
Route::post('/applicant/user/basic-info','ApplicationController@basicInfoCreate')->name('application.basic-info.create');
Route::get('/applicant/user/basic-info-view','ApplicationController@basicInfoView')->name('applicant.basic-info.view');

Route::get('/applicant/user/closest-relative','ApplicationController@guardianInfo')->name('applicant.guardian-info');
Route::post('/applicant/user/closest-relative','ApplicationController@CreateGuardianInfo')->name('applicant.nextKin-info.create');
Route::get('/applicant/user/closest-relative-view','ApplicationController@GuardianInfoView')->name('applicant.nextKin-info.view');


Route::get('/applicant/user/education-level','ApplicationController@educationVerify')->name('applicant.education-verify');
Route::post('/applicant/user/education-primary','ApplicationController@CreatePrimaryEducation')->name('applicant.education-primary-create');

Route::get('/applicant/user/other-info','ApplicationController@otherInfo')->name('applicant.other-info');
Route::post('/applicant/user/other-info','ApplicationController@otherInfoCreate')->name('applicant.other-info.create');
Route::get('/applicant/user/other-info-view','ApplicationController@otherInfoView')->name('applicant.other-info.view');

Route::get('/applicant/user/course-selection','ApplicationController@selectCourse')->name('applicant.select-course');
Route::post('/applicant/user/course-selection','ApplicationController@createSelectedCourses')->name('applicant.select-course.create');


Route::get('/applicant/user/attachments-and-payments','ApplicationController@paymentUploads')->name('applicant.attachments-payments');

//Route::get('/applicant/user/payment','ApplicationController@index')->name('applicant.basic-info');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| ADMINISTRATION ROUTES
|--------------------------------------------------------------------------
|by swai
*/
Route::get('/administration-index','AdministrationController@index');

Route::get('/test', function(){
  return view('Administration.Student.classes');
});
