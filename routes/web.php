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

Route::get('/', function (App\Aula $turmas) {
   //$dados = $turmas->find(1)->aula()->get()->toArray();
   $dados = $turmas->find(1);

   
   dd($dados->turma()->get()->toArray());
   
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
