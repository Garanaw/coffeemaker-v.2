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
    return view('welcome');
});

Route::get('coffee', 'CoffeeController@index');
Route::post('coffee', 'CoffeeController@summary');
Route::get('coffee/processOrder', 'CoffeeController@store');
