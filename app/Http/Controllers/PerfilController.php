<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Auth;
use Illuminate\Http\Request;

class PerfilController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$usuarioAtual = Profile::where('user_id', Auth::user()->id);
		$outrosAutores = User::all();

		if ($usuarioAtual) {
			$usuarioAtual = $usuarioAtual->first();
		}

		return view('perfil.index')->with('perfil', $usuarioAtual)
			->with('autores', $outrosAutores);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$usuarioAtual = Profile::where('user_id', Auth::user()->id)->first();
		return view('perfil.edit')->with('perfil', $usuarioAtual);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {

		$perfil                     = Profile::find($id);
		$perfil->info               = $request->input('info');
		$perfil->address            = $request->input('address');
		$perfil->{'address_number'} = $request->input('address_number');
		$perfil->cep                = $request->input('cep');
		$perfil->grade              = $request->input('grade');
		$perfil->area               = $request->input('area');
		$perfil->nacionalidade      = $request->input('nacionalidade');
		$perfil->public             = $request->input('publico') === 'on';

		/* Se o usuário enviou uma nova imagem de perfil então salva e atualiza no banco */
		if ($request->hasFile('picture') && $request->file('picture')->isValid()) {
			$userPicture        = $request->file('picture');
			$path               = $userPicture->storeAs('public/'.md5(time()).'.jpg', $request->input('picture'));
			$perfil->profilePic = $path;
		}

		$perfil->save();

		return redirect('/perfil');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
