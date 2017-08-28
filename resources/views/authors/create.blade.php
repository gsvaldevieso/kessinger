@extends('layouts.app')
@section('content')
	<form method="post" action="{{ route('authors.store') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="row">
		<div class="col-md-12">
			<label for="nome">Nome</label>
			<input type="text" name="name" class="form-control">	
			<label for="graduation">Graduação</label>
			<input type="text" name="graduation" class="form-control">	
		</div>
		<div class="col-md-12">
			<input type="submit" name="salvar" value="Salvar" class="btn btn-primary">	
		</div>
	</div>
	</form>
@stop 