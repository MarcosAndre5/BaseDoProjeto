@extends('principal')
@section('conteudo')
<h1>Listagem de Produtos</h1>
<table class="table table-striped table-bordered table-hover">
    @foreach($produtos as $p)
        <tr>
            <td><b>Nome:</b> {{$p->nome}}</td>
            <td>R$ {{$p->valor}}</td>
            <td>{{$p->descricao}}</td>
            <td>Qtd. {{$p->quantidade}}</td>
            <td>
                <a href="produtos/mostra/{{$p->id}}">
                    <span class="glyphicon glyphicon-search"></span>
                </a>
            </td>
        </tr>
    @endforeach
</table>
@stop