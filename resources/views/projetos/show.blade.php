@extends('principal')

@section('conteudo')

<div class="col-sm-8 col-sm-offset-1">
    <h1>Projeto: {{ $projetos->titulo }}</h1>
    <br>
    <h5>Descrição</h5>
    <p>{{ $projetos->descricao }}</p>
    <br>
    <h5>Data de início</h5>
    <p>{{ Carbon\Carbon::parse($projetos->dt_inicio)->format('d/m/Y') }}</p>
    <h5>Data de término</h5>
    <p>{{ Carbon\Carbon::parse($projetos->dt_fim)->format('d/m/Y') }}</p>
    <br>
    <h5><a href="{{ URL::to('requisitos/project/' . $projetos->id) }}">Requisitos</a></h5>
    <!--<h5><a href="{{ URL::to('projetos/' . $projetos->id . '/requisitos') }}">Requisitos</a></h5>-->
    <br>
    <h5><a href="{{ URL::to('teams/project/' . $projetos->id) }}">Equipe</a></h5>
    
</div>
@stop