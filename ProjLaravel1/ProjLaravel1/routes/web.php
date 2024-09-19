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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', function(){
    return 'Oi usuário';
});

Route::get('teste', function(){
        return[
            'nome' => "miguelzinho",
            'sobrenome' => 'Sanchez',
        ];
});

Route::get('/users/{id}', function ($id) {
    return $id;
});

Route::get('/users/{id}/{nome}', function ($id,$nome) {
    return $id. ' - ' .$nome;
});

Route::prefix('ususarios')->group(function(){
    Route::get('',function(){
        return "usuário";
    });
    Route::get('/{id}',function($id){
        return 'Mostra detalhes do usuário';
    });
    Route::get('/{id}/{pemissao}',function($id,$permissao){
        return 'Permissoes do Usuário';
    });
});

Route::get('/users/{id}', function ($id = null){
    return $id;
})->name('users');