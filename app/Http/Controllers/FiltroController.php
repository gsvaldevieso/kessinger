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

	public function filter(Request $request){
		$publicacoesCategoria = Publicacao::all()->pluck('categoria')->toArray();
		$periodicos           = Periodico::all()->pluck('titulo')->toArray();	
		$autores              = Publicacao::autores();
		$areas                = Area::all()->pluck('description')->toArray();

		$result = FiltroService::filterResult($request);

		return view('filtro.index')->with('periodicos', $periodicos)->with('autores', $autores)->with('areas', $areas)->with('publicacoesCategoria', $publicacoesCategoria);
	}
}
