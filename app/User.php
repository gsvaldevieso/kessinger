<?php

namespace App;

use App\Profile;
use Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable {
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function picture() {
		$usuarioAtual = Profile::where('user_id', $this->id)->first();

		if (!$usuarioAtual) {
			return '/storage/default.png';
		}

		$userPicture = Storage::url($usuarioAtual->profilePic);
		return $userPicture;
	}

	public function inactivate() {
		$usuarioAtual         = User::where('id', Auth::user()->id)->first();
		$usuarioAtual->active = false;
		$usuarioAtual->save();
	}

	public function activate() {
		$usuarioAtual         = User::where('id', Auth::user()->id)->first();
		$usuarioAtual->active = true;
		$usuarioAtual->save();
	}

	public function isActivated() {
		$usuarioAtual = User::where('id', Auth::user()->id)->first();

		return $usuarioAtual->active;
	}
}
