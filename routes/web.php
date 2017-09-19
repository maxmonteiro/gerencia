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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('requisitos','RequisitoController');
Route::resource('projetos.requisitos','RequisitoController');
Route::get('/requisitos/project/{id}', 'RequisitoController@project');
//Route::get('/project/{id}/requisitos', 'RequisitoController@project');

Route::resource('projetos','ProjetoController');

Route::resource('usuarios','UsuarioController');

Route::get('/teams/project/{id}', 'TeamController@project');
Route::get('/teams/create/{id}', 'TeamController@create');
Route::post('/teams/store', 'TeamController@store');
Route::post('/teams/destroy/{id}', 'TeamController@destroy');