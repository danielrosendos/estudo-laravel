@extends('layouts.app')

@section('content')

<h1>Novo Produto</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ action('ProdutoController@adiciona', empty($p->id) ? 0 : $p->id ) }}" method="post">

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

    <div class="form-group">
        <label>Nome</label>
        <input name="nome" class="form-control" value="{{ empty($p->id) ?  old('nome') : $p->nome }}" />
    </div>
    <div class="form-group">
        <label>Descrição</label>
        <input name="descricao" class="form-control" value="{{ empty($p->id) ? old('descricao') : $p->descricao }}" />
    </div>
    <div class="form-group">
        <label>Valor</label>
        <input name="valor" class="form-control"  value="{{ empty($p->id) ?  old('valor') : $p->valor }}" />
    </div>
    <div class="form-group">
        <label>Quantidade</label>
        <input name="quantidade" type="number" class="form-cotrol"  value="{{ empty($p->id) ? old('quantidade')  : $p->quantidade }}" />
    </div>
        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
    
</form>

@stop