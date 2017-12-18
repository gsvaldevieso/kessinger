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
					<a style="width:100%" class="btn blue" href="/publicacoes/{{ $publicacao->id }}">Visualizar</a>
					<form action="/analisar/aprovar/{{ $publicacao->id }}" method="POST">
						{{ csrf_field() }}
						<input style="width:100%" class="btn green" type="submit" name="deletar" value="Aprovar">
					</form>
					<form action="/analisar/rejeitar/{{ $publicacao->id }}" method="POST">
						{{ csrf_field() }}
						<input style="width:100%"  class="btn red" type="submit" name="deletar" value="Rejeitar">
					</form>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@stop