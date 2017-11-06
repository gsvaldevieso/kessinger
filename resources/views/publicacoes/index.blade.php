@extends('layouts.app')
@section('content')
<div class="container">
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
					<a href="{{$publicacao->publicacao()}}" style="color:#1e88e5;text-decoration: none;">Visualizar</a>
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
</div>
@stop