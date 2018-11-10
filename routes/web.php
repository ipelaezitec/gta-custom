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

<<<<<<< HEAD
Route::get('/panel/custom','CustomController@index')->name('custom');
Route::post('/panel/custom/store','CustomController@store')->name('store');

// todo : 
Route::get('/panel','PanelController@index')->name('panel');
=======
// panel 
Route::get('/panel','PanelController@index');
Route::get('/panel/appreceived','AppReceivedController@showAppsReceived');
Route::get('/panel/appreceived/{id)','AppReceivedController@showSingleApp');
Route::get('/panel/users','UserController@showUsers');
Route::get('/panel/appreceived/{id)','UserController@showUser');


//Example Route::get('/user/show/{id}','UserController@show');
>>>>>>> master
