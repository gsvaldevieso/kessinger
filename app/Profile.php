<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
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
