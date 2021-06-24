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

Route::get('/', function () {
    return view('index');
});
// Route::get('/', function () {
//     return view('layouts.master');
// });

Route::get('/site-config', 'BackendController@index')->name('site-config.index');

 Route::get('/site-config/{id}', 'BackendController@edit');
 Route::post('/site-config/{id}', 'BackendController@update')->name('site-config.update');;

