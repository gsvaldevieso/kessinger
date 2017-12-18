<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use App\Periodico;
use App\Publicacao;
use Illuminate\Http\Request;


class FiltroService
{
	public static function filterResult(Request $request) {
		return ['success' => 1];
	}
}