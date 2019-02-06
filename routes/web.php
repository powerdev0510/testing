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
    return view('/home');
});
Auth::routes();

Route::get('/policy', 'PolicyController@index');
Route::get('/policy/edit', 'PolicyController@edit');
Route::post('/md/convert', 'PolicyController@convert');