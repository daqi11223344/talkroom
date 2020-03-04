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

Route::post('index/xh','Index\Indexcontroller@xh');
Route::post('index/zs','Index\Indexcontroller@zs');
Route::post('index/hj','Index\Indexcontroller@hj');
Route::post('index/fj','Index\Indexcontroller@fj');
Route::post('index/pc','Index\Indexcontroller@pc');
Route::post('index/fensi','Index\Indexcontroller@fensi');
Route::post('index/dajia','Index\Indexcontroller@dajia');
Route::get('tan','Index\Indexcontroller@tan');
