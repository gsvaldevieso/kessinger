@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
			<h4>Publicações</h4>
		</div>
	</div>
	<div class="row">
		@foreach($publicacoes as $publicacao)
		<div class="col-md-4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				</div>
				<div class="card-content">
					<p style="font-weight: bold;text-align:center">{{ $publicacao->titulo }}</p>
					<small style="text-align:center">{{ $publicacao->autores }} <br>
					{{ $publicacao->area_atuacao }} <br>
					{{ $publicacao->categoria }} <br>
					{{ $publicacao->ano }}</small>
					
					<p class="truncate" style="text-align:justify;">
						{{ $publicacao->descricao }}
					</p>
				</div>
				<div class="card-action">
					<a href="/publicacoes/{{ $publicacao->id }}">Visualizar</a>
					<form action="/publicacoes/{{ $publicacao->id }}" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="DELETE">
						<input class="btn red" type="submit" name="deletar" value="Deletar">
					</form>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<div class="row">
		<div class="col s12">
			<h4>Periódicos</h4>
		</div>
	</div>
	<div class="row">
		@foreach($periodicos as $periodico)
		<div class="col-md-3">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img style="max-width: 200px; max-height: 400px;" class="activator materialboxed img-responsive" src="data:image/png;base64, {{$periodico->imagem}}">
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
				<div class="card-action text-center">
					<div class="row">
						<a href="/periodicos/{{ $periodico->id }}">Visualizar</a>
						<a href="/periodicos/periodico/{{$periodico->id}}" style="color:#1e88e5;text-decoration: none;">Publicações</a>
						<a href="/periodicos/excluir/{{$periodico->id}}" style="color:#F40000;text-decoration: none;">Deletar</a>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@stop
<script>
$(document).ready(function(){
	$('.materialboxed').materialbox();
});
</script>