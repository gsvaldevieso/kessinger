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
  
	static function validaEmail($email){
    if (empty($email)) {
      return false;
    }
      $er = "/^(([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}){0,1}$/";
      if (preg_match($er, $email)){
    return true;
      } else {
    return false;
      }
  }

}
