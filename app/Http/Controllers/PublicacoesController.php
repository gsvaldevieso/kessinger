<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacao;
use App\Periodico;
use App\ModelFactory;

class PublicacoesController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index(Request $request){
		$valorPesquisado = $request->input('pesquisar');
		
		if($valorPesquisado !== '')
    		$publicacoes = Publicacao::where('titulo', 'LIKE', "%$valorPesquisado%")->get();
		else
			$publicacoes = Publicacao::all();

    	return view('publicacoes.index')->with('publicacoes', $publicacoes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$periodicos = Periodico::all();
        return view('publicacoes.create')->with('periodicos', $periodicos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$factory = new ModelFactory();
        $publicacao = $factory->get('Publicacao');
		$publicacao->titulo = $request->input('titulo');
        $publicacao->autores = $request->input('autores');
        $publicacao->ano = $request->input('ano');
        $publicacao->periodico_id = $request->input('periodico');
        $publicacao->area_atuacao = $request->input('area_atuacao');
        $publicacao->categoria = $request->input('categoria');
    	$publicacao->publicacao = base64_encode(file_get_contents($request->file('publicacao')));
		$publicacao->save();

		return view('publicacoes.stored');
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
