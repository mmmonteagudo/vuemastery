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
Route::get('/intro/lessons/{no}', function($no){
    return view('vuemastery.lesson' . str_pad($no, 3, "0", STR_PAD_LEFT));
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
