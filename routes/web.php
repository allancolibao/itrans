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

Route::get('/', 'MainController@index')->name('home');
Route::get('/eacode', 'MainController@perEacode')->name('eacode');
Route::post('/send', 'MainController@send')->name('send');
Route::post('/send/eacode', 'MainController@sendEacode')->name('send.eacode');