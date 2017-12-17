<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Periodico extends Model {
	public function usuario() {
		$user = User::find($this->user_id);

		if ($user) {
			return $user->first();
		}

		return null;
	}
}
