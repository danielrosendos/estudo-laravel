@extends('layout.principal')

@section('conteudo')

<h1>Novo Produto</h1>

<form action="{{ action('ProdutoController@adiciona') }}" method="post">

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

    <div class="form-group">
        <label>Nome</label>
        <input name="nome" class="form-control" />
    </div>
    <div class="form-group">
        <label>Descrição</label>
        <input name="descricao" class="form-control" />
    </div>
    <div class="form-group">
        <label>Valor</label>
        <input name="valor" class="form-control" />
    </div>
    <div class="form-group">
        <label>Quantidade</label>
        <input name="quantidade" type="number" class="form-cotrol" />
    </div>
        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
    
</form>

@stop