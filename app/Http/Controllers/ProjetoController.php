<?php

namespace App\Http\Controllers;

use App\Projeto;
use View;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // pegar os projetos
        $projetos = Projeto::all();
        
        // carregar a view e passar os projetos
        /*return View::make('projetos.index')
            ->with('projetos', $projetos);*/
        return view('projetos.index', ['projetos' => $projetos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // carregar a view do formulário
        return view('projetos.create');
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
        $projetos = new Projeto;
        // setar os campos
        $projetos->titulo = $request->titulo;
        $projetos->descricao = $request->descricao;
        
        $projetos->dt_inicio = $request->dt_inicio;
        $dt_inicio = $projetos->dt_inicio;
        if (empty($dt_inicio)) {
            $dt_inicio = null;
        }
        $projetos->dt_fim = $request->dt_fim;
        // salvar o objeto
        $projetos->save();
        // redirecionar para lista
        return redirect('projetos');
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
