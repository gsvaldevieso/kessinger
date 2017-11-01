<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Publicacao;

class Periodico extends Model
{
    public function usuario()
    {
    	$user = User::find($this->user_id);

    	if ($user) {
    		return $user->first();
    	}
    	
    	return null;
    }

    public function publicacoes()
    {
    	$publicacoes = Publicacao::where('periodico_id', $this->id);
    	return $publicacoes;
    }
}
