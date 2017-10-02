@extends('layouts.app')
@section('content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<body class="deep-purple accent-4">
<div id="particles-js">

<div id="editaPerfil" class="container">
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
                			<img alt="User Pic" name="user-current-img" src="{{ Auth::user()->picture() }}" class="img-circle img-responsive">
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






        jQuery(function($){
			var fileDiv = document.getElementById("picture");
			var fileInput = document.getElementById("picture");

			fileInput.addEventListener("change",function(e){
			  var files = this.files
			  showThumbnail(files)
			},false)

			function showThumbnail(files){
			  for(var i=0;i<files.length;i++){
			    var file = files[i]
			    var imageType = /image.*/
			    if(!file.type.match(imageType)){
			      console.log("Not an Image");
			      continue;
			    }

			    var image = document.createElement("img");
			    var thumbnail = $("#thumbnail");
			    image.file = file;
			    image.classList.add('img-circle');
			    image.classList.add('img-responsive');
			    thumbnail.html(image);

			    var reader = new FileReader()
			    reader.onload = (function(aImg){
			      return function(e){
			        aImg.src = e.target.result;
			      };
			    }(image))
			    var ret = reader.readAsDataURL(file);
			    var canvas = document.createElement("canvas");
			    ctx = canvas.getContext("2d");
			    image.onload= function(){
			      ctx.drawImage(image,100,100)
			    }
			  }
			}
          });
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