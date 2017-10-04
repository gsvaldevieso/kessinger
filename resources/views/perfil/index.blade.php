@extends('layouts.app')
@section('content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<body style="background-color: #0D47A1">
<div id="particles-js">

<div id="perfil" class="container">
	<div class="row">
		<form action="/perfil" method="POST">
        <div class="col-md-12 toppad" >
          <div class="panel panel-info">
            <div style="background-color:white;" class="panel-heading">
              <h3 class="panel-title">{{ $perfil->full_name}}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                	<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{ Auth::user()->picture() }}" class="img-circle img-responsive"> </div>
          <div class=" col-md-9 col-lg-9 ">
                <span><h3>Sobre mim</h3></span>
      					<div class="row">
					        <div class="input-field col s12">
					          <textarea readonly id="textarea1" class="materialize-textarea">{{ $perfil->info }}</textarea>
					        </div>
      					</div>
  				</div>
          <div class="col-lg-offset-3 col-md-9 col-lg-9">
          <h3>Informações pessoais</h3>
            <table class="table highlight table-user-information">
                    <tbody>
                      <tr>
                        <td>Data de nascimento:</td>
                        <td>{{ $perfil->birthDate }}</td>
                      </tr>
                      <tr>
                        <td>Endereço:</td>
                        <td>{{ $perfil->address }}</td>
                      </tr>
            <tr>
              <td>Número:</td>
              <td>{{ $perfil->address_number }}</td>
            </tr>
            <tr>
              <td>CEP:</td>
              <td>{{ $perfil->cep }}</td>
            </tr>
            <tr>
              <td>Titulação:</td>
              <td>{{ $perfil->grade }}</td>
            </tr>
            <tr>
              <td>Área(s) de estudo(s):</td>
              <td>{{ $perfil->area }}</td>
            </tr>
            <tr>
              <td>CPF:</td>
              <td>{{ $perfil->cpf }}</td>
            </tr>
            <tr>
              <td>Nacionalidade:</td>
              <td>{{ $perfil->nacionalidade }}</td>
            </tr>
                    </tbody>
                  </table>
          </div>
  				
                  
                </div>
                                 <div class="panel-footer">
                    <a href="/perfil/{{ $perfil->id }}/edit" type="button" class="btn btn-sm blue">Alterar dados</a>
                     <a href="/perfil/{{ $perfil->id }}/edit" type="button" class="btn btn-sm red">Inativar conta</a>
                </div>
              </div>
            </div>

          </div>
        </div>
		</form>
	</div>
</div>
</div>

<script src="/js/particles.js"></script>
<script>particlesJS.load('particles-js', '/config/package.json', function() {});</script>

</body>
@stop