@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-info">
            <div style="background-color:white;" class="panel-heading">
                <h3 class="panel-title">Criar nova publicação</h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="/publicacoes" enctype="multipart/form-data" class="col s12">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Placeholder" name="autores" id="autores" type="text" class="validate">
                            <label for="autores">Autores</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="titulo" id="titulo" type="text" class="validate">
                            <label for="titulo">Título</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="ano" placeholder="Placeholder" id="ano" type="text" class="validate">
                            <label for="ano">Ano da publicação</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="area_atuacao" id="area_atuacao" type="text" class="validate">
                            <label for="area_atuacao">Área de atuação</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="categoria" placeholder="Placeholder" id="categoria" type="text" class="validate">
                            <label for="categoria">Categoria</label>
                        </div>
                        <div class="input-field col s6">
                            <select name="periodico" id="periodico">
                                @foreach($periodicos as $periodico)
                                <option value="{{$periodico->id}}">{{$periodico->titulo}}</option>
                                @endforeach
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
<script type="text/javascript">
    
$(document).ready(function() {
$('select').material_select();
});

</script>
@stop