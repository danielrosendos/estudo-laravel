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

Route::get('/', 'HomeController@index');

Route::get('/produtos', 'ProdutoController@lista');

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostrar')->where('id', '[0-9]+');

Route::get('produtos/novo/{id}', 'ProdutoController@novo')->where('id', '[0-9]+');

Route::post('produtos/adiciona/{id}', 'ProdutoController@adiciona');

Route::get('produtos/json', 'ProdutoController@listaJson');

Route::get('produtos/remove/{id}', 'ProdutoController@remove')->where('id', '[0-9]+');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
