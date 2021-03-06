@extends('layouts.app')
@section('content')
<div class="row">
    <form class="col s12" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="panel panel-info">
                <div style="background-color:white;" class="panel-heading">
                    <h3 class="panel-title">Filtro avançado</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col s6">
                            <input type="text" name="autores">
                            <label>Autores</label>
                        </div>
                        <div class="col s4">
                            <input type="text" name="area_atuacao">
                            <label>Área de atuação</label>
                        </div>
                        <div class="col s4">
                            <input type="text" name="qualis">
                            <label>Qualis</label>
                        </div>
                        <div class="col s4">
                            <input type="text" name="fator">
                            <label>Fator de impacto</label>
                        </div>
                        <div class="col s3">
                            <input type="number" name="ano">
                            <label>Ano</label>
                        </div>
                        <div class="col s6">
                            <input type="text" name="periodico">
                            <label>Periódico</label>
                        </div>
                        <div class="col s5">
                            <input type="text" name="categoria">
                            <label>Categoria</label>
                        </div>
                        <div class="col s2">
                            <input type="number" name="data_inicio">
                            <label>Início</label>
                        </div>
                        <div class="col s2">
                            <input type="number" name="data_fim">
                            <label>Fim</label>
                        </div>
                        <div class="col s12">
                            <br>
                            <input class="btn green" type="submit" name="enviar" value="Filtrar">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    
    $('.autores-chips').material_chip({
      autocompleteOptions: {
        data: {
        @foreach($autores as $autor)
            '{{$autor}}': null,
        @endforeach
        },
        limit: Infinity,
        minLength: 1
      }
    });

    $('.area-atuacao').material_chip({
      autocompleteOptions: {
        data: {
        @foreach($areas as $area)
            '{{$area}}': null,
        @endforeach
        },
        limit: Infinity,
        minLength: 1
      }
    });

    $('.qualis-chips').material_chip({
      autocompleteOptions: {
        data: {
            "A1": null,
            "A2": null,
            "B1": null,
            "B2": null,
            "B3": null,
            "B4": null,
            "B5": null,
            "C":  null
        },
        limit: Infinity,
        minLength: 1
      }
    });

    $('.fator-impacto-chips').material_chip({
      autocompleteOptions: {
        data: {
            "0;1":null,
            "2;3":null,
            "4;5":null,
            "6;7":null,
            "8;9":null,
            "10":null
        },
        limit: Infinity,
        minLength: 1
      }
    });



    $('.periodico-chips').material_chip({
      autocompleteOptions: {
        data: {
            @foreach($periodicos as $periodico)
                '{{$periodico}}': null,
            @endforeach
        },
        limit: Infinity,
        minLength: 1
      }
    });


        $('.categoria-chips').material_chip({
          autocompleteOptions: {
            data: {
                @foreach($publicacoesCategoria as $categoria)
                    '{{$categoria}}': null,
                @endforeach
            },
            limit: Infinity,
            minLength: 1
          }
        });
    });

  $('.chips').on('chip.add', function(e, chip){
    $(this).append('<input type="hidden" name="'+$(this).attr('name')+'>"');
  });
    
    </script>
    @stop