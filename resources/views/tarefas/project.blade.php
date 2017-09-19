@extends('principal')

@section('conteudo')

<div class="col-sm-8 col-sm-offset-1">
    <h1>Tarefas - {{ $projeto->titulo }}</h1>
    <div class="row user-nav">
        <!--<a class="btn btn-small btn-primary" href="{{ URL::to('requisitos/' . $projeto->id . '/create') }}">Novo requisito</a>-->
        <a class="btn btn-small btn-primary" href="{{ URL::to('tarefas/create/' . $projeto->id) }}">Nova tarefa</a>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>Id</td>
                <td>Descrição</td>
                <td>Etapa</td>
                <td>Prioridade</td>
                <td>Ordem</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
        @foreach($tarefas as $tarefa)
            <tr>
                <td>{{ $tarefa->id }}</td>
                <td>{{ $tarefa->descricao }}</td>
                <td>{{ $tarefa->etapa }}</td>
                <td>{{ $tarefa->prioridade }}</td>
                <td>{{ $tarefa->ordem }}</td>
                <td>
                    <a class="btn btn-small btn-info" href="{{ URL::to('tarefas/' . $tarefa->id . '/edit') }}">Editar</a>
                    <form action="/tarefas/{{ $tarefa->id }}" method="POST">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input class="btn btn-small btn-danger" type="submit" name="name" value="Apagar">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@stop