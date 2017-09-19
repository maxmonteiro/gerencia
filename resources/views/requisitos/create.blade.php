@extends('principal')

@section('conteudo')

<div class="col-sm-8 col-sm-offset-1">
    <h1>Novo requisito</h1>
    <br>
    <div class="row">
        <div class="col-sm-8">
            <form role="form" action="/requisitos" method="POST">
                <div class="form-group float-label-control">
                    <label for="">Ref</label>
                    <input type="text" name="ref" class="form-control" placeholder="">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Título</label>
                    <input type="text" name="titulo" class="form-control" placeholder="">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Projeto</label>
                    <input type="text" name="projeto" class="form-control" placeholder="">
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Prioridade:</label>
                    <select name="prioridade" class="form-control" id="sel1">
                        <option>Alta</option>
                        <option>Média</option>
                        <option>Baixa</option>
                    </select>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-small btn-primary">Salvar</button>
                <a class="btn btn-small btn-default" href="{{ URL::to('requisitos') }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>

@stop