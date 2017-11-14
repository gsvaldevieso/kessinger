<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Periodico;
use App\ModelFactory;
use App\Area;
use Auth;

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


    public function userPeriodics()
    {
        $periodicos = Periodico::where('user_id', Auth::user()->id)->get();
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
        $periodico->user_id = (Auth::user())->id;
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
        $periodico = Periodico::find($id);
        return view('periodicos.show')->with('periodico', $periodico);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $periodico = Periodico::find($id);
        $areas = Area::all();
        return view('periodicos.edit')->with('periodico', $periodico)->with('areas', $areas);
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

        $periodico = Periodico::find($id);

        $periodico->titulo = $request->input('titulo');
        $periodico->issn = $request->input('issn');
        $periodico->area_atuacao = $request->input('area_atuacao');
        $periodico->fator_impacto = $request->input('fator_impacto');
        $periodico->qualis = $request->input('qualis');
        $periodico->descricao = $request->input('descricao');

        $periodico->save();

        return redirect('/periodicos/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $periodico = Periodico::find($id);

        $periodico->delete();

        return redirect()->action('PeriodicosController@userPeriodics');
    }
}
