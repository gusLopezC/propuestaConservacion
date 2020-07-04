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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/maniobras/create', 'HomeController@create')->name('maniobras.create');
Route::post('/maniobras/save', 'HomeController@save')->name('maniobras.save');
Route::get('/maniobras/{maniobra}', 'HomeController@edit')->name('maniobras.edit');
Route::post('/maniobras/update/', 'HomeController@update')->name('maniobras.update');
Route::get('/maniobras/destroy/{maniobra}', 'HomeController@destroy')->name('maniobras.destroy');

