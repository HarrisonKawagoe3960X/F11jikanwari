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

Route::get('/', 'home@index');
Route::get('/home', 'home@index');
Route::get('/addcourse', 'AddCourse@index');
Route::get('/addusercourse', 'AddCourse@addusercourse');
Route::get('/newcourse', 'newCourse@index');
Route::get('/editcourse', 'newCourse@edit');
Auth::routes();

Route::get('/homesub', 'HomeController@index')->name('home');
Route::post('/createcourse', 'CreateCourse@newcourse');
Route::get('/detailusercourse', 'AddCourse@detailusercourse');
Route::get('/deleteusercourse', 'AddCourse@deleteusercourse');
Route::get('/addattend', 'AddCourse@addattend');
Route::get('/addabsent', 'AddCourse@addabsence');
Route::get('/adddelay', 'AddCourse@adddelay');
Route::post('/updatecourse', 'CreateCourse@updatecourse');
