<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

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
}
