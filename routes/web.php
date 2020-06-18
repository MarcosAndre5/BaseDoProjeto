<?php

Route::get('/', function(){
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/produtos', 'ProdutoController@listarProdutos');

Route::get('/produtos/mostra/{id}', 'ProdutoController@visualizarProduto')->where('id', '[0-9]+');

Route::get('/produtos/novo', 'ProdutoController@novoProduto');

Route::post('/produtos/cadastrar', 'ProdutoController@cadastrarProduto');

Route::get('/produtos/remover/{id}', 'ProdutoController@removerProduto');

Route::get('/produtos/json', 'ProdutoController@listaJson');

Route::get('/login2', 'LoginController@login');

Route::post('/logout2', 'LoginController@logout');
