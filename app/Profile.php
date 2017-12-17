<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    static function validarCep($cep) {
	    // retira espacos em branco
	    $cep = trim($cep);
	    
	    // expressao regular para avaliar o cep
	    $avaliaCep = preg_match("/[0-9]{5}-[0-9]{3}/", $cep);
	    
	    // verifica o resultado
	    return (bool)$avaliaCep;
	}

	public static function validateName($name){
    	$name = trim($name);
    	$regex  = "/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/";
    	
    	return (bool)(preg_match($regex, $name));
	}
}
