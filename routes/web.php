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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bar', 'HomeController@bar')->name('bar');
Route::get('/line', 'HomeController@line')->name('line');
Route::get('/donut', 'HomeController@donut')->name('donut');
Route::get('/pie', 'HomeController@pie')->name('pie');
Route::get('/area', 'HomeController@area')->name('area');
Route::get('/areaspline', 'HomeController@areaspline')->name('areaspline');
Route::get('/geo', 'HomeController@geo')->name('geo');
Route::get('/percentage', 'HomeController@percentage')->name('percentage');
Route::get('/progressbar', 'HomeController@progressbar')->name('progressbar');
