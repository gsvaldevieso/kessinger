@extends('layouts.app')
@section('content')
@foreach($periodicos as $periodico)
<div class="col-md-3">
	<div class="card">
		<div class="card-image waves-effect waves-block waves-light">
			<img width="200" height="150" class="activator materialboxed" src="data:image/png;base64, {{$periodico->imagem}}">
		</div>
		<div class="card-content" style="height:200px;">
			<p style="font-weight: bold;text-align:center">{{ $periodico->titulo }}</p>
			<p style="text-align:justify;">
				{{ substr($periodico->descricao, 0, 200) }}
			</p>
			@if($periodico->usuario())
			<p class="text-center">
				<small>Cadastrado por {{  $periodico->usuario()->name }}</small>
			</p>
			@endif
		</div>
		<div class="card-action text-center	">
			<a href="/publicacoes/periodico/{{$periodico->id}}" style="color:#1e88e5;text-decoration: none;">Visualizar publicações</a>
			<a href="/publicacoes/periodico/{{$periodico->id}}" style="color:#F40000;text-decoration: none;">Deletar</a>
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