<?php 

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProdutoController extends Controller{
    public function listarProdutos(){
        $produtos = DB::select('SELECT * FROM produtos');
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function visualizarProduto($id){
        $produto = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);
        if(empty($produto)){
            return "Esse produto não existe.";
        }
        return view('produto.detalhes')->with('produto', $produto);
    }

    public function novoProduto(){
        return view('produto.formulario');
    }

    public function cadastrarProduto(Request $request){
        $produto = $request->all();
        DB::insert('INSERT INTO produtos (nome, descricao, valor, quantidade) VALUES (?, ?, ?, ?)', array($produto['nome'], $produto['descricao'], $produto['valor'], $produto['quantidade']));
        return view('produto.adicionado')->with('nome', $produto['nome']);
    }
}