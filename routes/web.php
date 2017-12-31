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

Route::get('/', function (App\User $turmas) {
   $dados = $turmas->find(auth()->id())->turmas()->where('user_turma',1)->get()->toArray();
   
   dd($dados);
   
 
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
