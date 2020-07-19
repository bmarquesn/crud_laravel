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

Route::get('/', 'CrudController@index');
Route::get('/produtos/listar', 'ProdutosController@list');
Route::get('/produtos/novo', 'ProdutosController@create');
Route::post('/produtos/novo', 'ProdutosController@store')->name('registrar_produto');
Route::get('/produto/visualizar/{id}', 'ProdutosController@show');
Route::get('/produto/editar/{id}', 'ProdutosController@edit');
Route::post('/produto/editar/{id}', 'ProdutosController@update')->name('alterar_produto');
Route::get('/produto/excluir/{id}', 'ProdutosController@delete');
Route::post('/produto/excluir/{id}', 'ProdutosController@destroy')->name('excluir_produto');
