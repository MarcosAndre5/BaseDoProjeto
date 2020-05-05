@extends('layout.principal')
@section('conteudo')
<h1>Listagem de Produtos</h1>
<table class="table table-striped table-bordered table-hover">
    @if(empty($produtos))
        <div class="alert alert-danger">
            Você não tem nenhum produto cadastrado.
        </div>
    @else
        @foreach($produtos as $p)
            <tr class="{{ $p->quantidade <= 1 ? 'danger' : '' }}">
                <td><b>Nome:</b> {{$p->nome}}</td>
                <td>R$ {{$p->valor}}</td>
                <td>{{$p->descricao}}</td>
                <td>Qtd. {{$p->quantidade}}</td>
                <td>
                    <a href="produtos/mostra/{{$p->id}}">
                        <button class="btn btn-primary">
                            <span class="glyphicon glyphicon-search"></span> Visualizar
                        </button>
                    </a>
                </td>
            </tr>
        @endforeach
    @endif
</table>
    <h4>
        <span class="label label-danger pull-right">Um ou menos itens no estoque.</span>
    </h4>
@stop