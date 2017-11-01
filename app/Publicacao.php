<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Periodico;
use Auth;

class Publicacao extends Model
{
    protected $table = 'publicacoes';

    public function publicacao()
    {
		return Storage::url($this->publicacao);
    }

    public static function getUserPublicacoes()
    {
        $periodicos = Periodico::where('user_id', Auth::user()->id);
        $publicacoes = [];

        foreach ($periodicos->cursor() as $periodico) {
            foreach ($periodico->publicacoes()->cursor() as $publicacao) {
                $publicacoes[] = $publicacao; 
            };
        }

        return $publicacoes;
    }
}
