@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
        <div class="panel panel-info">
            <div style="background-color:white;" class="panel-heading">
                <h3 class="panel-title">Visualizar publicação</h3>
            </div>
            <div class="panel-body">
                <form id="form-publicacao" method="POST" action="/publicacoes" enctype="multipart/form-data" class="col s12">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Digite o nome do(s) autor(es)" name="autores" id="autores" type="text" class="validate" value="{{ $publicacao->autores }}" readonly="readonly">
                            <label for="autores">Autor(es)</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="Digite o título" name="titulo" id="titulo" type="text" class="validate" value="{{ $publicacao->titulo }}"  readonly="readonly">
                            <label for="titulo">Título</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="ano" type="text" class="form-control datepicker" name="ano" value="{{ $publicacao->ano }}"  readonly="readonly">
                            <label for="ano">Ano da publicação</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="area_atuacao" id="area_atuacao" type="text" class="validate" value="{{ $publicacao->area_atuacao }}"  readonly="readonly">
                            <label for="area_atuacao">Área de atuação</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <!-- <select id="categoria" name="categoria">
                                <option value="A">Artigo científico</option>
                                <option value="M">Monografia</option>
                                <option value="R">Resumo expandido</option>
                            </select> -->
                            <input type="text" name="categoria" value="{{ $publicacao->categoria() }}"  readonly="readonly">
                            <label for="categoria">Categoria</label>
                        </div>
                        <div class="input-field col s6">
                            <!-- <select name="periodico" id="periodico"> -->
                            <!-- </select> -->
                            <input type="text" name="periodico" value="{{ $publicacao->periodico()->titulo }}"  readonly="readonly">
                            <label>Periódico</label>
                        </div>
                    </div>
                </form>
                    <div class="row">
                        @if($publicacao->user_id == Auth::user()->id)
                        <div class="input-field col s2">
                            <a href="/publicacoes/{{$publicacao->id}}/edit" class="btn blue">Editar</a>
                        </div>
                        <div class="input-field col s2">
                            <form action="/publicacoes/{{ $publicacao->id }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <input class="btn red" type="submit" name="deletar" value="Excluir">
                            </form>
                        </div>

                        @endif
                    </div>
                    </div>
            </div>
        </div>
	</div>
</div>
@stop