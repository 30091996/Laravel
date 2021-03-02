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

Route::get('/', 'PageController@cvecara');
Route::get('/dashboard', 'PageController@dashboard');
Route::get('/porudzbina', 'PageController@porudzbina');

Route::get('/proizvod/get', 'ProizvodController@proizvodi');

Route::get('/porudzbina/pregledaj-porudzbine', 'PorudzbinaController@porudzbine');
Route::post('/porudzbina/poruci', 'PorudzbinaController@novaPorudzbina');
Route::delete('/porudzbina/delete', 'PorudzbinaController@skiniPorudzbina');
