@extends('principal')

@section('conteudo')

<div class="col-sm-8 col-sm-offset-1">
    <h1>Projetos</h1>
    <div class="row user-nav">
        <a class="btn btn-small btn-primary" href="{{ URL::to('projetos/create') }}">Novo projeto</a>
    </div>
    <div class="input-group"> <span class="input-group-addon">Filtrar</span>
        <input id="filter" type="text" class="form-control" placeholder="Digite aqui...">
    </div>
    <br>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>Cód.</td>
                <td>Título</td>
                <td>Início</td>
                <td>Término</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
        @foreach($projetos as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->titulo }}</td>
                <td>{{ Carbon\Carbon::parse($value->dt_inicio)->format('d/m/Y') }}</td>
                <td>{{ Carbon\Carbon::parse($value->dt_fim)->format('d/m/Y') }}</td>
                <td>
                    <a class="btn btn-small btn-success" href="{{ URL::to('projetos/' . $value->id) }}">Exibir</a>
                    <a class="btn btn-small btn-info" href="{{ URL::to('projetos/' . $value->id . '/edit') }}">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@stop
        