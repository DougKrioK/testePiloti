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

Auth::routes();

Route::get('/lista', 'UsersController@lista');
Route::get('/usuarios/mostra/{id}', 'UsersController@mostra')->where('id', '[0-9]+'); // estou dizendo no where, que somente faz a roda se o id for numero
Route::get('/usuarios/novo', 'UsersController@novo');
Route::post('/usuarios/adiciona', 'UsersController@adiciona');
Route::post('/usuarios/altera/{id}', 'UsersController@altera');
Route::get('/usuarios/remove/{id}', 'UsersController@remove');

Route::get('/', 'HomeController@index')->name('home');
