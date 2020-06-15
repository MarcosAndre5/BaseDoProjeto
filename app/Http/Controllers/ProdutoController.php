<?php 

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use estoque\Produto;
use estoque\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller{
    public function listarProdutos(){
        $produtos = Produto::all();
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function visualizarProduto($id){
        $produto = Produto::find([$id]);
        if(empty($produto)){
            return "Esse produto não existe.";
        }
        return view('produto.detalhes')->with('produto', $produto);
    }

    public function novoProduto(){
        return view('produto.formulario');
    }

    public function cadastrarProduto(ProdutoRequest $request){
        Produto::create($request->all());
        return redirect()
            ->action('ProdutoController@listarProdutos')
            ->withInput(Request::only('nome'));
    }

    public function removerProduto($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@listarProdutos');
    }

    public function listaJson(){
        $produtos = Produto::all();
        return response()->json($produtos);
    }
}