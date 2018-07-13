@extends('layout.principal')

@section('conteudo')
    @if(empty($produtos))
    <div class="alert alert-danger">Você não tem nenhum produto cadastrado</div>

    @else
    <h1>Listagem de Produtos</h1>

    <table class="table table-striped table-bordered table-hover">
        
    @foreach ($produtos as $p):
    <tr class="{{ $p->quantidade <= 1 ? 'danger' : '' }}">
        <td>{{ $p->nome }} </td>
        <td>{{ $p->valor }} </td>
        <td>{{ $p->descricao }} </td>
        <td>{{ $p->quantidade }} </td>
        <td><a href="produtos/mostra/{{ $p->id }}"><spam class="glyphicon glyphicon-search"></spam></a></td>
    </tr>
    @endforeach
        
    </table>
    @endif

    @if($quantidade <= 1)
    <h4>
        <span class="label label-danger pull-right">Um ou menos itens no estoque</span>
    </h4>
    @endif

    <br>
    <br>
    
    @if(old('nome'))
    <div class="alert alert-success">

        <strong>Sucesso!</strong> O produto {{ old('nome') }} foi adicionado corretamente

    </div>
    @endif

@stop