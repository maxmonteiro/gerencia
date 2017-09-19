<?php

namespace App\Http\Controllers;

use App\Requisito;
use App\Projeto;
use View;
use Illuminate\Http\Request;

class RequisitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // pegar os requisitos
        $requisitos = Requisito::all();
        // carregar a view e passar os requisitos
        return View::make('requisitos.index')
            ->with('requisitos', $requisitos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('requisitos.create');
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
        $requisitos = new Requisito;
        // setar os campos
        $requisitos->ref = $request->ref;
        $requisitos->titulo = $request->titulo;
        $requisitos->prioridade = $request->prioridade;
        $requisitos->projeto_id = $request->projeto;
        // salvar o objeto
        $requisitos->save();
        // redirecionar para lista
        return redirect('requisitos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*
        // selecionar o registro na tabela atraves do parametro id
        $requisitos = Requisito::find($id);
        // carregar a view e passar o registro
        return view('requisitos.show')
            ->with('requisitos', $requisitos);
        */
    }

    /**
     * Exibe os requisitos referentes a um projeto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function project($id)
    {
        // selecionar o projeto através da id
        $projetos = Projeto::find($id);
        // filtrar os requisitos através do id do projeto
        $requisitos = Requisito::where('projeto_id', $projetos->id)->get();
        // enviar para a view o resultado
        return view('requisitos.project')
            ->with('projeto', $projetos)
            ->with('requisitos', $requisitos);
    }

    /**
     * Cria um requisito referente a um projeto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function novoRequisito($id){
        // selecionar o projeto através da id
        $projetos = Projeto::find($id);
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
        /// selecionar o registro na tabela
        $requisitos = Requisito::find($id);
        // retorna para o formulario de edicao
        return view('requisitos.edit')
            ->with('requisitos', $requisitos);
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
        $requisitos = Requisito::find($id);
        // setar os campos
        $requisitos->ref = $request->ref;
        $requisitos->titulo = $request->titulo;
        $requisitos->prioridade = $request->prioridade;
        $requisitos->projeto_id = $request->projeto;
        // salvar o objeto
        $requisitos->save();
        // redirecionar para lista
        return redirect('requisitos');
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
        $requisitos = Requisito::find($id);
        // excluir o registro
        $requisitos->delete();
        // redirecionar para a lista
        return redirect('requisitos');
    }
}
