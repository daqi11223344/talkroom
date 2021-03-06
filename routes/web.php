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

Route::get('/','Index\IndexController@index');

Route::post('index/xh','Index\IndexController@xh');
Route::post('index/zs','Index\IndexController@zs');
Route::post('index/hj','Index\IndexController@hj');
Route::post('index/fj','Index\IndexController@fj');
Route::post('index/pc','Index\IndexController@pc');
Route::post('index/fensi','Index\IndexController@fensi');
Route::post('index/dajia','Index\IndexController@dajia');
Route::get('tan','Index\IndexController@tan');
