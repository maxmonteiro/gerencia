@extends('principal')

@section('conteudo')

<div class="col-sm-8 col-sm-offset-1">
    <h1>Nova tarefa - {{ $projetos->titulo }}</h1>
    <br>
    <div class="row">
        <div class="col-sm-8">
            <form role="form" action="/tarefas" method="POST">
                <div class="form-group float-label-control">
                    <label for="">Descrição</label>
                    <input type="text" name="descricao" class="form-control" placeholder="">
                </div>
                <div class="form-group col-sm-4">
                <label for="">Etapa</label>
                    <select name="etapa" class="form-control" id="sel1">
                        <option>open</option>
                        <option>doing</option>
                        <option>done</option>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                <label for="">Prioridade:</label>
                    <select name="prioridade" class="form-control" id="sel1">
                        <option>alta</option>
                        <option>média</option>
                        <option>baixa</option>
                    </select>
                </div>
                <div class="form-group float-label-control col-sm-4">
                    <label for="">Ordem</label>
                    <input type="text" name="ordem" class="form-control" placeholder="0 a 9">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Comentário</label>
                    <textarea name="comentario" class="form-control" placeholder="" rows="5"></textarea>
                </div>
                <div class="form-group form-date float-label-control">
                    <label for="">Data de criação</label>
                    <input type="date" name="dt_criacao" class="form-control" placeholder="">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Projeto</label>
                    <input type="text" name="projeto" class="form-control" placeholder="">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-small btn-primary">Salvar</button>
                <a class="btn btn-small btn-default" href="{{ URL::to('tarefas/project/' . $projetos->id) }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>

@stop