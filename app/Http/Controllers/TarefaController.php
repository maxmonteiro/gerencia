<?php

namespace App\Http\Controllers;

use App\Tarefa;
use App\Projeto;
use View;
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
    public function create()
    {
        //
        return view('tarefas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
