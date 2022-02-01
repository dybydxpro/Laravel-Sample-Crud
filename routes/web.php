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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/items','App\Http\Controllers\ItemController@fetchAll')->name('fetchAll');
Route::get('/view/{id}', 'App\Http\Controllers\ItemController@viewOne')->name('viewOne');
Route::get('/items/insert', 'App\Http\Controllers\ItemController@openCreateView')->name('openCreateView');
Route::post('/items/create','App\Http\Controllers\ItemController@create')->name('create');
Route::get('/items/edit/{id}', 'App\Http\Controllers\ItemController@openEditView')->name('openEditView');
Route::put('/items/update/{id}','App\Http\Controllers\ItemController@edit')->name('edit');
Route::get('/items/delete/{id}', 'App\Http\Controllers\ItemController@delete')->name('delete');
