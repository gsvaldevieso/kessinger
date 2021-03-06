<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InactivateUserController extends Controller {

	public function index() {
		return view('auth.inactivate');
	}

	public function inativar(Request $request) {
		if (Hash::check($request->password, Auth::user()->password)) {
			Auth::user()->inactivate();
			Auth::logout();
			return view('auth.login')->with(['validationMessage' => 'Sua conta foi desativada com sucesso!']);
		}
		return view('auth.inactivate')->with('password', true);
	}
}
