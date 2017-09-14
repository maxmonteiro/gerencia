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
        $projetos = Projeto::orderBy('id', 'asc')->get();
        
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
        // selecionar o registro na tabela atraves do parametro id
        $projetos = Projeto::find($id);
        // carregar a view e passar o registro
        return view('projetos.show')
            ->with('projetos', $projetos);
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
        $projetos = Projeto::find($id);
        // retorna para o formulario de edicao
        return view('projetos.edit')
            ->with('projetos', $projetos);
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
        // selecionar registro na tabela
        $projetos = Projeto::find($id);
        // setar os campos
        $projetos->titulo = $request->titulo;
        $projetos->descricao = $request->descricao;
        $projetos->dt_inicio = $request->dt_inicio;
        $projetos->dt_fim = $request->dt_fim;
        // salvar o objeto
        $projetos->save();
        // redirecionar para a lista
        return redirect('projetos');
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
