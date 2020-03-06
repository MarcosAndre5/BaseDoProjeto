<?php

Route::get('/', function(){
    return view('welcome');
});

Route::get('/', 'ProdutoController@lista');

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');