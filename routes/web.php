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

Route::get('/', 'VideosController@index');

Route::get('/start', 'PagesController@start');

Route::get('/contact', 'PagesController@contact');

Route::get('/about', 'PagesController@about');

Route::resource('videos', 'VideosController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
