<?php

Route::get('/', function(){
    return view('welcome');
});

Route::get('/', 'ProdutoController@listarProdutos');

Route::get('/produtos/mostra/{id}', 'ProdutoController@visualizarProduto')->where('id', '[0-9]+');

Route::get('/produtos/novo', 'ProdutoController@novoProduto');

Route::post('/produtos/cadastrar', 'ProdutoController@cadastrarProduto');