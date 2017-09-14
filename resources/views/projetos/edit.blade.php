@extends('principal')

@section('conteudo')

<div class="col-sm-8 col-sm-offset-1">
    <h1>{{ $projetos->titulo }}</h1>
    <br>
    <div class="row">
        <div class="col-sm-8">
            <form role="form" action="{{ URL::to('projetos/' . $projetos->id) }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group float-label-control">
                    <label for="">Título</label>
                    <input type="text" name="titulo" value="{{ $projetos->titulo }}" class="form-control" placeholder="">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Descrição</label>
                    <textarea name="descricao" class="form-control" placeholder="" rows="5">{{ $projetos->descricao }}</textarea>
                </div>
                <div class="form-group form-date float-label-control">
                    <label for="">Data de início</label>
                    <input type="date" name="dt_inicio" value="{{ $projetos->dt_inicio }}" class="form-control" placeholder="">
                </div>
                <div class="form-group form-date float-label-control">
                    <label for="">Data de término</label>
                    <input type="date" name="dt_fim" value="{{ $projetos->dt_fim }}" class="form-control" placeholder="">
                </div>
                {{ method_field('PUT') }}
                <button type="submit" class="btn btn-small btn-primary">Salvar</button>
                <a class="btn btn-small btn-default" href="{{ URL::to('projetos') }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>

@stop