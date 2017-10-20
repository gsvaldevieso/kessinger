<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Publicacao extends Model
{
    protected $table = 'publicacoes';

    public function publicacao()
    {
		return Storage::url($this->publicacao);
    }
}
