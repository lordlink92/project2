<?php

use Illuminate\Support\Facades\Route;
use \App\Pastel;
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


Route::get('pasteles','PastelesController@index')->name('pasteles.todos');
Route::get('pasteles/{id}','PastelesController@show')->name('pasteles.unico')->where('id', '[0-9]+');
Route::get('pasteles/crear','PastelesController@crear')->name('pasteles.crear');
Route::post('pasteles/store', 'PastelesController@store');

