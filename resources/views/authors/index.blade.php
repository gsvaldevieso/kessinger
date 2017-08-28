@extends('layouts.app')
@section('content')
	<h1 class="page-header">Autores</h1>

	<table class="table table-hover table-striped">
		<thead>
			<th>Nome</th>
			<th>Graduação</th>
		</thead>
		<tbody>
		@foreach($authors as $author)
			<tr>
				<td>{{ $author->name }}</td>
				<td>{{ $author->graduation }}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@stop 