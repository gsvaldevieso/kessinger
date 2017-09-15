@extends('layouts.app')
@section('content')
<div class="container">
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
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{url('/img/no-user-image.gif')}}" class="img-circle img-responsive"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                    	<tr>
                    		<td>Endereço:</td>
                    		<td><input class="form-control" type="text" name="address"></td>
                    	</tr>
						<tr>
							<td>Número:</td>
							<td><input class="form-control" type="text" name="address_number"></td>
						</tr>							
						<tr>
							<td>CEP:</td>
							<td><input class="form-control" type="text" name="cep"></td>
						</tr>
						<tr>
							<td>Título:</td>
							<td><input class="form-control" type="text" name="grade"></td>
						</tr>
						<tr>
							<td>Área de estudo:</td>
							<td><input class="form-control" type="text" name="area"></td>
						</tr>
						<tr>
							<td>CPF:</td>
							<td><input class="form-control" type="text" name="cpf"></td>
						</tr>
						<tr>
							<td>Nacionalidade:</td>
							<td><input class="form-control" type="text" name="nacionalidade"></td>
						</tr>                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <input class="btn" type="submit" name="salvar" value="Salvar alterações">
                    </div>
          </div>
        </div>
		</form>
	</div>	
</div>
@stop 