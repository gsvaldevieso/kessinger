<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiltroController extends Controller
{
	public function index(){
		return view('filtro.index');
	}
}
