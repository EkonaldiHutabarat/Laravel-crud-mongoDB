<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','BukuController@index');
Route::get('/add','BukuController@create');
Route::post('/store','BukuController@store');
Route::get('/edit/{id}','BukuController@edit');
Route::post('/update','BukuController@update');
Route::get('/delete/{id}','BukuController@destroy');
