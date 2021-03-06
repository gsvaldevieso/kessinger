<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Profile;
use App\User;
use App\ModelFactory;
use App\Paises;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Register Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users as well as their
	| validation and creation. By default this controller uses a trait to
	| provide this functionality without requiring any additional code.
	|
	 */

	use RegistersUsers;

	/**
	 * Where to redirect users after registration.
	 *
	 * @var string
	 */
	protected $redirectTo = '/';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('guest');
	}


	public function showRegistrationForm()
	{
    $paises = Paises::all();

    return view('auth.register')->with('paises', $paises);
	}


	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data) {
		return Validator::make($data, [
				'name'     => 'required|string|max:255',
				'email'    => 'required|string|email|max:255|unique:users',
				'password' => 'required|string|min:6|confirmed'
			]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	protected function create(array $data) {
		$novoUsuario = User::create([
				'name'     => $data['name'],
				'email'    => $data['email'],
				'password' => bcrypt($data['password'])
			]);

		$novoPerfil                    = new Profile();
		$novoPerfil->{'user_id'}       = $novoUsuario->id;
		$novoPerfil->{'full_name'}     = $novoUsuario->name;
		$novoPerfil->{'cpf'}           = array_key_exists('cpf', $data) ? $data['cpf'] : null;
		$novoPerfil->{'birthDate'}     = $data['data_nascimento'];
		$novoPerfil->{'nacionalidade'} = $data['nacionalidade'];
		$novoPerfil->save();

		return $novoUsuario;
	}
}
