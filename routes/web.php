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



//Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/about', 'HomeController@about')->name('about');
Route::resource('posts','PostController');
Route::post('posts/delete/{id}','PostController@destroy')->name('delete.post');
Route::resource('test','testController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
