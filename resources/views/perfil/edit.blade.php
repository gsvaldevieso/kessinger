@extends('layouts.app')
@section('content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<body class="deep-purple accent-4">
<div id="particles-js">

<div id="editaPerfil" class="container">
	<div class="row">
		<form action="/perfil/{{ $perfil->id }}" method="POST">
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
                		<img alt="User Pic" src="/img/{{ $perfil->avatar }}" class="img-circle img-responsive">
		                <form action="/perfil/{{ $perfil->id }}" method="POST" enctype="multipart/form-data">
			                	<div class="file-field input-field">
				      				<div class="btn">
								        <span>Selecionar Imagem</span>
								        <input type="file" name="file">
				      				</div>
			    				</div>
		    				<h5 style="color: white">AAAAAAAAAA</h5>
		    				<input class="btn text-center" type="submit" name="enviar" value="Enviar">
							<input type="hidden" value="{{ csrf_token() }}" name="_token">
		    			</form>
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
                    		<td><input class="form-control datepicker" value="{{ $perfil->birthDate }}" type="text" name="birthDate" ></td>
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
							<td><input class="form-control" value="{{ $perfil->cpf }}" type="text" name="cpf" id="cpf"></td>
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
<script>
	$(document).ready(function () {
        $('#cpf').mask('000.000.000-00');
    });

	var d = new Date();
	d.setFullYear( d.getFullYear() - 100 );

    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    max: new Date(),
    selectYears: 100,
    format: 'dd/mm/yyyy',
    today: 'Hoje',
    clear: 'Limpar',
    close: 'Ok',
    monthsFull: [ 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' ],
	monthsShort: [ 'Jan', 'Fev', 'Mar', 'Abr', 'Mar', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez' ],
	weekdaysFull: [ 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado' ],
	weekdaysShort: [ 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab' ],
	weekdaysLetter: [ 'D', 'S', 'T', 'Q', 'Q', 'S', 'S' ],
	labelMonthNext: 'Próximo Mês',
	labelMonthPrev: 'Mês anterior',
	labelMonthSelect: 'Selecione o Mês',
	labelYearSelect: 'Selecione o ano',
    closeOnSelect: false // Close upon selecting a date,
  });
</script>

</div>

<script src="/js/particles.js"></script>
<script>particlesJS.load('particles-js', '/config/package.json', function() {});</script>

</body>
@stop 