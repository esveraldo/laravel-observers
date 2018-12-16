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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'clientes'], function(){
    Route::get('/', ['as' => 'clientes.index', 'uses' => 'ClienteController@index']);
    Route::post('/', ['as' => 'clientes.index.store', 'uses' => 'ClienteController@store']);
    Route::delete('/{id}', ['as' => 'clientes.index.destroy', 'uses' => 'ClienteController@destroy']);
});
