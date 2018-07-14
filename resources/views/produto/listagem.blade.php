@extends('layouts.app')

@section('content')
    @if(empty($produtos))
    <div class="alert alert-danger">Você não tem nenhum produto cadastrado</div>

    @else
    <h1>Listagem de Produtos</h1>

    <table class="table table-striped table-bordered table-hover">

    <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Descrição</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Buscar</th>
      <th scope="col">Deletar</th>
      <th scope="col">Atualizar</th>
    </tr>
  </thead>   
  <tbody>
    @foreach ($produtos as $p):
    <tr class="{{ $p->quantidade <= 1 ? 'danger' : '' }}">
        <td>{{ $p->nome }} </td>
        <td>R$ {{ $p->valor }} </td>
        <td>{{ $p->descricao }} </td>
        <td>{{ $p->quantidade }} </td>
        <td><a href="{{ action('ProdutoController@mostrar', $p->id) }}"><spam class="glyphicon glyphicon-search">Mostrar</spam></a></td>
        <td>
            <a href="{{ action('ProdutoController@remove', $p->id) }}">
                <spam class="glyphicon glyphicon-trash">Remover</spam>
            </a>
        </td>
        <td>
            <a href="{{ action('ProdutoController@novo', $p->id) }}">
                <spam class="glyphicon glyphicon-pencil">Atualizar</spam>
            </a>
        </td>
    </tr>
    @endforeach
    </tbody>    
    </table>
    @endif

    <h4>
        <span class="label label-danger pull-right">Um ou menos itens no estoque</span>
    </h4>

    <br>
    <br>
    
    @if(old('nome'))
    <div class="alert alert-success">

        <strong>Sucesso!</strong> O produto {{ old('nome') }} foi adicionado corretamente

    </div>
    @endif

@stop