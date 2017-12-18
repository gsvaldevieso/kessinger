<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Authors;
use App\Periodico;
use App\Publicacao;
use App\Area;
use App\Services\FiltroService;

class FiltroController extends Controller
{
	public function index(){
		$publicacoesCategoria = Publicacao::all()->pluck('categoria')->toArray();
		$periodicos = Periodico::all()->pluck('titulo')->toArray();	
		$autores = Publicacao::autores();
		$areas = Area::all()->pluck('description')->toArray();

		return view('filtro.index')->with('periodicos', $periodicos)->with('autores', $autores)->with('areas', $areas)->with('publicacoesCategoria', $publicacoesCategoria);
	}

	public function filter(Request $request) 
	{
		$autores = $request->input('autores');
		$area_atuacao = $request->input('area_atuacao');
		$qualis = $request->input('qualis');
		$fator = $request->input('fator');
		$periodico = $request->input('periodico');
		$categoria = $request->input('categoria');
		$data_inicio = $request->input('data_inicio');
		$data_fim = $request->input('data_fim');

    	$publicacoes = Publicacao::where('autores', 'LIKE', '%'.$autores.'%')
    		->where('categoria', 'LIKE', '%'.$categoria.'%')
    		->where('area_atuacao', 'LIKE', '%'.$area_atuacao.'%')
    		->get();

    	$periodicos =  Periodico::where('autores', 'LIKE', '%'.$autores.'%')
    		->where('titulo', 'LIKE', '%'.$periodico.'%')
			->where('fator_impacto', 'LIKE', '%'.$fator.'%')
			->where('qualis', 'LIKE', '%'.$qualis.'%')
    		->get();

    	return view('publicacoes.avancado')->with('publicacoes', $publicacoes)
    		->with('periodicos', $periodicos);
	}
}
