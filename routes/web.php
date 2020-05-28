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

Route::get('/',"TodoController@home")->name('home');



Route::post('/store',"TodoController@store")->name('store');

Route::get('/edit/{id}',"TodoController@edit")->name('edit');

Route::post('/update/{id}',"TodoController@update")->name('update');