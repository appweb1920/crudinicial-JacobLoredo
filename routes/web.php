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

Route::get('/', 'PuntoReciclajeController@index')->middleware('auth');
Route::post('/','PuntoReciclajeController@store');

Route::get('/EditarPuntoR/{id}','PuntoReciclajeController@edit');
Route::post('/ActualizarP/{id}','PuntoReciclajeController@update')->middleware('auth');
Route::get('/EliminarP/{id}','PuntoReciclajeController@destroy');

Route::get('/Recolector', 'RecolectorController@index');
Route::post('/Recolector','RecolectorController@store')->middleware('auth');
Route::get('/EditarR/{id}','RecolectorController@edit');
Route::post('/ActualizarR/{id}','RecolectorController@update')->middleware('auth');
Route::get('/EliminarR/{id}','RecolectorController@destroy');

Route::get('/DetalleRecolector','DetalleRecolectorController@index')->middleware('auth');
Route::post('/DetalleRecolector','DetalleRecolectorController@store');
Route::get('/EditarDR/{id}','DetalleRecolectorController@edit')->middleware('auth');
Route::post('/ActualizarDr/{id}','DetalleRecolectorController@update')->middleware('auth');
Route::get('/EliminarDR/{id}','DetalleRecolectorController@destroy')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
