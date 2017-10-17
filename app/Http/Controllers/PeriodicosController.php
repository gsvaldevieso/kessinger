<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Periodico;
use App\ModelFactory;
use App\Area;

class PeriodicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodicos = Periodico::all();
        return view('periodicos.index')->with('periodicos', $periodicos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $areas = Area::all();
        return view('periodicos.create')->with('areas', $areas);
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
        $periodico = $factory->get('Periodico');
        $periodico->titulo = $request->input('titulo');
        $periodico->issn = $request->input('issn');
        $periodico->imagem = base64_encode(file_get_contents($request->file('imagem')));
        $periodico->area_atuacao = $request->input('area_atuacao');
        $periodico->fator_impacto = $request->input('fator_impacto');
        $periodico->qualis = $request->input('qualis');
        $periodico->descricao = $request->input('descricao');
        $periodico->save();

        return view('periodicos.stored');
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
