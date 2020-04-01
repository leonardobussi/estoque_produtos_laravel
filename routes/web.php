<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '<h1>Rota Vazia por enquanto</h1>
            Ir para lista de Produtos<a href="/produtos"> Produtos</a>';
});


/*Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
    ]);*/


Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/json', 'ProdutoController@listaJson');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');