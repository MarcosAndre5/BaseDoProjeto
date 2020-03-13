<?php 

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller{
    public function lista(){
        $produtos = DB::select('SELECT * FROM produtos');
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra($id){
        $produto = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);
        if(empty($produto)){
            return "Esse produto não existe.";
        }
        return view('produto.detalhes')->with('produto', $produto);
    }
}