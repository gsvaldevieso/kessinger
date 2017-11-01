@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
        <div class="panel panel-info">
            <div style="background-color:white;" class="panel-heading">
                <h3 class="panel-title">Criar nova publicação</h3>
            </div>
            <div class="panel-body">
                <form id="form-publicacao" method="POST" action="/publicacoes" enctype="multipart/form-data" class="col s12">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Digite o nome do(s) autor(es)" name="autores" id="autores" type="text" class="validate">
                            <label for="autores">Autor(es)</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="Digite o título" name="titulo" id="titulo" type="text" class="validate">
                            <label for="titulo">Título</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="ano" type="text" class="form-control datepicker" name="ano" required>
                            <label for="ano">Ano da publicação</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="area_atuacao" id="area_atuacao" type="text" class="validate">
                            <label for="area_atuacao">Área de atuação</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <select id="categoria" name="categoria">
                                <option value="A">Artigo científico</option>
                                <option value="M">Monografia</option>
                                <option value="R">Resumo expandido</option>
                            </select>
                            <label for="categoria">Categoria</label>
                        </div>
                        <div class="input-field col s6">
                            <select name="periodico" id="periodico">
                            </select>
                            <label>Periódico</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Publicação</span>
                                <input name="publicacao" type="file" multiple>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <button id="submeter" class="btn waves-effect waves-light" type="submit" name="action">Editar
                          <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
	</div>
</div>
@stop