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
    return view('welcome');
});

Route::resource('/','Frontend\IndexController');
Route::resource('contacts','Frontend\ContactController');
Route::resource('services','Frontend\ServiceController');
Route::resource('abouts','Frontend\AboutController');



//backend
Route::get('/backend/dashboard','Backend\DashboardController@index')->name('dashboard');