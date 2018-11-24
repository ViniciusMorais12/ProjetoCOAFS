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

Route::get('/quemsomos','CoopController@quemsomos');
Route::get('/historia', 'CoopController@historia');
Route::get('/comosurge', 'CoopController@comosurge');
Route::get('/noticias', 'CoopController@noticias');
Route::get('/contato', 'CoopController@contato');

Route::get('/show/{id}', 'noticiacontroller@show')->name('noticia');

Route::get('/criar', 'noticiacontroller@create')->name('criar_noticia');

Route::post('/store', 'noticiacontroller@store')->name('salvar_noticia');

Route::get('/', 'noticiacontroller@index')->name('noticias');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/logout', 'HomeController@logout')->name('logout');

Route::get('/img/{nome}', 'noticiacontroller@img')->name('img');

Route::post('/comentar', 'noticiacontroller@comentar')->name('comentar');