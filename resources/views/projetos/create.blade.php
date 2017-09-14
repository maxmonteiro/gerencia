@extends('principal')

@section('conteudo')

<div class="col-sm-8 col-sm-offset-1">
<h1>Novo projeto</h1>
<br>
<div class="row">
    <div class="col-sm-8">
        <form role="form" action="/projetos" method="POST">
            <div class="form-group float-label-control">
                <label for="">Título</label>
                <input type="text" name="titulo" class="form-control" placeholder="">
            </div>
            <div class="form-group float-label-control">
                <label for="">Descrição</label>
                <textarea name="descricao" class="form-control" placeholder="" rows="5"></textarea>
            </div>
            <div class="form-group form-date float-label-control">
                <label for="">Data de início</label>
                <input type="date" name="dt_inicio" class="form-control" placeholder="">
            </div>
            <div class="form-group form-date float-label-control">
                <label for="">Data de término</label>
                <input type="date" name="dt_fim" class="form-control" placeholder="">
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-small btn-primary">Salvar</button>
            <a class="btn btn-small btn-default" href="{{ URL::to('projetos') }}">Cancelar</a>
        </form>
    </div>
</div>
</div>

@stop