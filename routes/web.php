<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', 'ProdutoController@lista');

Route::get('/outra', function(){
	return '<h2>Outra lógica com Laravel!</h2>';
});