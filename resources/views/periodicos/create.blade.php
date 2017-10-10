@extends('layouts.app')
@section('content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<body class="green darken-4">
    <div id="particles-js"></div>
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
                                <input placeholder="Título do periódico" name="titulo" id="titulo" type="text" class="validate">
                                <label for="titulo">Título</label>
                            </div>
                            <div class="input-field col s6">
                                <input name="issn" id="issn" pattern="[0-9][0-9][0-9][0-9][-][0-9][0-9][0-9][X0-9]" type="text" class="validate">
                                <label for="issn">ISSN</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <!--  <input name="area_atuacao" id="area_atuacao" type="text" class="validate">
                                @foreach($areas as $area)
                                <option value="{{$area->description}}">{{$area->description}}</option>
                                @endforeach
                            </select> -->
                            <label for="area_atuacao">Área de atuação</label>
                        </div>
                        <div class="input-field col s3">
                            <select>
                                <option value="0;1">0 até 1</option>
                                <option value="2;3">2 até 3</option>
                                <option value="4;5">4 até 5</option>
                                <option value="6;7">6 até 7</option>
                                <option value="8;9">8 até 9</option>
                                <option value="10">10</option>
                            </select>
                            <label>Fator de impacto</label>
                        </div>
                        <div class="input-field col s3">
                            <input placeholder="Qualis" name="qualis" id="qualis" type="text" class="validate">
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#area_atuacao').autocomplete({
            data: {
                {{
                    json_encode($areas->pluck('description'))
                }}
            },
            limit: 20,
            onAutocomplete: function(val) {
            },
            minLength: 1,
        });

    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
<script src="/js/particles.js"></script>
<script>particlesJS.load('particles-js', '/config/particulasLinhas.json', function() {});</script>
</body>
@stop