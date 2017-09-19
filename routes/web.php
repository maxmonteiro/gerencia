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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

// rotas para home
Route::get('/', 'ProjetoController@index');

Route::get('/dashboard', function () {
    return view('dashboard');
});

// rotas para requisitos
Route::resource('requisitos','RequisitoController');
Route::resource('projetos.requisitos','RequisitoController');
Route::get('/requisitos/project/{id}', 'RequisitoController@project');
//Route::get('/project/{id}/requisitos', 'RequisitoController@project');

// rotas para projetos
Route::resource('projetos','ProjetoController');

// rotas para usuários
Route::resource('usuarios','UsuarioController');

// rotas para teams
Route::resource('teams','TeamController');
Route::get('/teams/project/{id}', 'TeamController@project');
Route::get('/teams/create/{id}', 'TeamController@create');
Route::post('/teams/store', 'TeamController@store');