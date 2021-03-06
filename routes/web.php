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

Route::get('/', function () {
    return view('/auth/splash');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/view', 'ViewController@index')->name('status');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/report', 'ReportController@index')->name('report');


Route::resource('users','UserController',['except' =>['destroy']]);

Route::resource('users', 'UserController')->except([ 'destroy' ]);
Route::resource('students', 'StudentController');
Route::resource('posts', 'PostController');
Route::resource('client', 'ClientController');
Route::resource('view', 'ViewController');
Route::resource('admin', 'AdminController');
Route::resource('cuser', 'CuserController');
Route::resource('report', 'ReportController');

