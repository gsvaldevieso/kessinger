@extends('layouts.app')
@section('content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<body class="deep-purple accent-4">
    <div id="particles-js"></div>
    <div id="perfil" class="container">
        <div class="row">
            <form action="/perfil/{{ $perfil->id }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="col-md-12 toppad" >
                    <div class="panel panel-info">
                        <div style="background-color:white;" class="panel-heading">
                            <h3 class="panel-title">{{ $perfil->full_name}}</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 " align="center">
                                    <div id="thumbnail">
                                        <img alt="User Pic" name="user-current-img" src="{{ Auth::user()->picture() }}" class="img-thumbnail img-responsive">
                                    </div>
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>Selecionar Imagem</span>
                                            <input type="file" id="picture" name="picture">
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-9 col-lg-9 ">
                                    <span>Sobre mim</span>
                                    <div class="row">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea form-control" type="text" name="info">{{ $perfil->info }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table striped table-user-information">
                                        <tbody>
                                            <tr>
                                                <td>Data de nascimento:</td>
                                                <td><span style="color: black; background-color: transparent; border-color: transparent;" class="form-control" value="{{ $perfil->birthDate }}" type="text" name="birthDate">{{ $perfil->birthDate }}</span></td>
                                            </tr>
                                            <tr>
                                                <td>Endereço:</td>
                                                <td><input class="form-control" value="{{ $perfil->address }}" type="text" name="address"></td>
                                            </tr>
                                            <tr>
                                                <td>Número:</td>
                                                <td><input class="form-control" value="{{ $perfil->address_number }}" type="text" name="address_number"></td>
                                            </tr>
                                            <tr>
                                                <td>CEP:</td>
                                                <td><input class="form-control" value="{{ $perfil->cep }}" type="text" name="cep"></td>
                                            </tr>
                                            <tr>
                                                <td>Titulação:</td>
                                                <td><input class="form-control" value="{{ $perfil->grade }}" type="text" name="grade"></td>
                                            </tr>
                                            <tr>
                                                <td>Área(s) de estudo(s):</td>
                                                <td><input class="form-control" value="{{ $perfil->area }}" type="text" name="area"></td>
                                            </tr>
                                            <tr>
                                                <td>CPF:</td>
                                                <td><span style="color: black; background-color: transparent; border-color: transparent;" class="form-control" value="{{ $perfil->cpf }}" type="text" name="cpf" id="cpf">{{ $perfil->cpf }}</span></td>
                                            </tr>
                                            <tr>
                                                <td>Nacionalidade:</td>
                                                <td><input class="form-control" value="{{ $perfil->nacionalidade }}" type="text" name="nacionalidade"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <input class="btn" type="submit" name="salvar" value="Salvar alterações">
                            <a href="/perfil" type="button" class="btn btn-sm red">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="/js/editPerfil.js"></script>
<script src="/js/particles.js"></script>
</body>
@stop