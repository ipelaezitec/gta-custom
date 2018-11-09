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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/','HomeController@index');
Route::get('/application','ApplicationController@index');

Route::get('/panel/custom','CustomController@index')->name('custom');
Route::post('/panel/custom/store','CustomController@store')->name('store');

// todo : 
Route::get('/panel','PanelController@index')->name('panel');
