@extends('layouts.app')
@section('content')
    @foreach($periodicos as $periodico)
	<div class="col-md-3">
	  <div class="card">
	    <div class="card-image waves-effect waves-block waves-light">
	      <img width="200" height="150" class="activator materialboxed" src="data:image/png;base64, {{$periodico->imagem}}">
	    </div>
	    <div class="card-content">
	      <p style="font-weight: bold;text-align:center">{{ $periodico->titulo }}</p>
	      <p class="truncate" style="text-align:justify;">
		    {{$periodico->descricao}}
		  </p>   
	    </div>
	    <div class="card-action">
	    	<a style="color:#1e88e5;text-decoration: none;">Visualizar</a>	
	    </div>
	  </div>
	</div>

    <script>
      $(document).ready(function(){
            $('.materialboxed').materialbox();
      });
    </script>
    @endforeach
@stop 