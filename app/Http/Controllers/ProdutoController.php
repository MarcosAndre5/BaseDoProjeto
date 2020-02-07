<?php 

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller{
    public function lista(){
        $html = '<h1>Listagem de produtos com Laravel.</h1>';
        $html .= '<ul>';

        $produtos = DB::select('SELECT * FROM produtos');

        foreach($produtos as $p){
            $html.='<li><b>Nome:</b> '.$p->nome.'<br><b>Descriçao:</b> '.$p->descricao.'</li><br>';
        }

        $html .= '</ul>';

        return $html;
    }
}