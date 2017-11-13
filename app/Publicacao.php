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

    public function periodico()
    {
    	$periodico = Periodico::find($this->periodico_id);
    	return $periodico;
    }

    public function categoria()
    {
    	switch ($this->categoria) {
    		case 'A':
    			return 'Artigo científico';
    		case 'M':
    			return 'Monografia';
			case 'R':
    			return 'Resumo expandido';
    	}
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
