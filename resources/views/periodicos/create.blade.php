@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-info">
            <div style="background-color:white;" class="panel-heading">
                <h3 class="panel-title">Criar novo periódico</h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="/periodicos" enctype="multipart/form-data" class="col s12">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Placeholder" name="titulo" id="titulo" type="text" class="validate">
                            <label for="titulo">Título</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="issn" id="issn" type="text" class="validate">
                            <label for="issn">ISSN</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Placeholder" name="area_atuacao" id="area_atuacao" type="text" class="validate">
                            <label for="area_atuacao">Área de atuação</label>
                        </div>
                        <div class="input-field col s3">
                            <input id="fator_impacto" name="fator_impacto" type="text" class="validate">
                            <label for="fator_impacto">Fator de impacto</label>
                        </div>
                        <div class="input-field col s3">
                            <input placeholder="Placeholder" name="qualis" id="qualis" type="text" class="validate">
                            <label for="qualis">Qualis</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="descricao" name="descricao" class="materialize-textarea"></textarea>
                            <label for="descricao">Descrição</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Anexar imagem</span>
                                <input name="imagem" type="file" multiple>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Selecione uma imagem que descreva o periódico...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <input class="waves-effect waves-light btn" type="submit" value="Submeter" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop