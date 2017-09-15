@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<form action="/perfil" method="POST">
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
							<td>Título:</td>
							<td>{{ $perfil->grade }}</td>
						</tr>
						<tr>
							<td>Área de estudo:</td>
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
            </div>
                 <div class="panel-footer">
                        <a href="/perfil/{{ $perfil->id }}/edit" type="button" class="btn btn-sm btn-primary">Alterar dados</a>
                    </div>
          </div>
        </div>
		</form>
	</div>	
</div>
@stop 