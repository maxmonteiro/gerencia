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
