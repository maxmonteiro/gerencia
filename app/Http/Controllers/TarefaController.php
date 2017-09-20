<?php

namespace App\Http\Controllers;

use App\Tarefa;
use App\Projeto;
use View;
use Redirect;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Tarefa::all();
        //return view('tarefas.index', ['tarefas' => $tarefas]);
        return View::make('tarefas.index')
            ->with('tarefas', $tarefas);
    }

    /**
     * Exibe as tarefas referentes a um projeto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function project($id)
     {
         // selecionar o projeto através da id
         $projetos = Projeto::find($id);
         // filtrar as tarefas através do id do projeto
         $tarefas = Tarefa::where('projeto_id', $projetos->id)->get();
         // enviar para a view o resultado
         return view('tarefas.project')
             ->with('projeto', $projetos)
             ->with('tarefas', $tarefas);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $projetos = Projeto::find($id);
        return view('tarefas.create')
            ->with('projetos', $projetos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // instanciar um novo objeto
        $tarefas = new Tarefa;
        // setar os campos
        $tarefas->descricao = $request->descricao;
        $tarefas->etapa = $request->etapa;
        $tarefas->prioridade = $request->prioridade;
        $tarefas->ordem = $request->ordem;
        $tarefas->comentario = $request->comentario;
        $tarefas->dt_criacao = $request->dt_criacao;
        $tarefas->projeto_id = $request->projeto;
        // salvar o objeto
        $tarefas->save();
        // redirecionar para lista
        //return redirect('tarefas');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // selecionar o registro na tabela
        $tarefas = Tarefa::find($id);
        // retorna para o formulario de edicao
        return view('tarefas.edit')
            ->with('tarefas', $tarefas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // selecionar o registro na tabela
        $tarefas = Tarefa::find($id);
        $projetos = Projeto::find($tarefas->projeto_id);
        // setar os campos
        $tarefas->descricao = $request->descricao;
        $tarefas->etapa = $request->etapa;
        $tarefas->prioridade = $request->prioridade;
        $tarefas->ordem = $request->ordem;
        $tarefas->comentario = $request->comentario;
        $tarefas->dt_criacao = $request->dt_criacao;
        $tarefas->projeto_id = $request->projeto;
        // salvar o objeto
        $tarefas->save();
        // redirecionar para lista
        //return redirect()->back();
        return Redirect::to('tarefas/project/' . $projetos->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // selecionar o registro na tabela
        $tarefas = Tarefa::find($id);
        $projetos = Projeto::find($tarefas->projeto_id);
        // excluir o registro
        $tarefas->delete();
        // redirecionar para a lista
        return Redirect::to('tarefas/project/' . $projetos->id);
    }
}
