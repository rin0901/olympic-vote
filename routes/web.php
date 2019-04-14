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

Route::get('/top', 'voteController@top');
Route::post('/top', 'voteController@post');


Route::post('/comfirm', 'voteController@comfirm');


Route::post('/complet', 'voteController@complet');

Route::get('/agenda/top', 'agendaController@top');

Route::get('/agenda/comfirm', 'agendaController@comfirm');

Route::get('/agenda/complet', 'agendaController@complet');

Route::get('/show', 'tableController@show');