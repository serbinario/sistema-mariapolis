<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('cadastro', ['as' => 'cadastro.index', 'middleware'=>'auth', 'uses' => 'CadastroController@index']);
Route::get('anyData', ['as' => 'datatables.data', 'middleware'=>'auth', 'uses' => 'CadastroController@anyData']);
Route::get('cadastro/create', ['as' => 'cadastro.create', 'middleware'=>'auth', 'uses' => 'CadastroController@create']);
Route::post('cadastro/store', ['as' => 'cadastro.store', 'middleware'=>'auth', 'uses' => 'CadastroController@store']);
