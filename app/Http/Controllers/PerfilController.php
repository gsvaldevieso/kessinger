<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarioAtual = Profile::where('user_id', Auth::user()->id)->first();
        return view('perfil.index')->with('perfil', $usuarioAtual);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
    public function update(Request $request, $id)
    {
        $perfil = Profile::find($id);
        $perfil->address = $request->input('address');
        $perfil->{'address_number'} = $request->input('address_number');
        $perfil->cep = $request->input('cep');
        $perfil->grade = $request->input('grade');
        $perfil->area = $request->input('area');
        $perfil->cpf = $request->input('cpf');
        $perfil->nacionalidade = $request->input('nacionalidade');
        $perfil->save();

        return redirect('/perfil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
