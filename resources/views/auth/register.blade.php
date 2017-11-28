@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar-se</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nome completo</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-mail</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="data_nascimento" class="col-md-4 control-label">Data de nascimento</label>
                                <div class="col-md-6">
                                    <input id="data_nascimento" type="text" class="form-control datepicker" name="data_nascimento" required>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group">
                                <label for="nacionalidade" class="col-md-4 control-label">Nacionalidade</label>
                            <div class="form-group col s6 center-align">
                                <select onchange="myFunction()" name="nacionalidade" id="nacionalidade" class="validate">
                                    @foreach($paises as $pais)
                                    <option value="{{$pais->name}}">{{$pais->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        </div>


                        <div class="row">
                            <div class="form-group">
                                <label for="cpf" class="col-md-4 control-label">CPF</label>
                                <div class="col-md-6">
                                    <input disabled id="cpf" type="text" class="form-control" name="cpf" required>
                                </div>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Senha</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirmar senha</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                Cadastrar-me
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
$('select').material_select();
});
</script>
<script>
$(document).ready(function () {
$('#cpf').mask('000.000.000-00');
});
var d = new Date();
d.setFullYear( d.getFullYear() - 100 );
$('.datepicker').pickadate({
selectMonths: true, // Creates a dropdown to control month
max: new Date(),
selectYears: 100,
format: 'dd/mm/yyyy',
today: 'Hoje',
clear: 'Limpar',
close: 'Ok',
monthsFull: [ 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' ],
monthsShort: [ 'Jan', 'Fev', 'Mar', 'Abr', 'Mar', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez' ],
weekdaysFull: [ 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado' ],
weekdaysShort: [ 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab' ],
weekdaysLetter: [ 'D', 'S', 'T', 'Q', 'Q', 'S', 'S' ],
labelMonthNext: 'Próximo Mês',
labelMonthPrev: 'Mês anterior',
labelMonthSelect: 'Selecione o Mês',
labelYearSelect: 'Selecione o ano',
closeOnSelect: false // Close upon selecting a date,
});
</script>

<script>



function myFunction() {
   
    var campoCPF = document.getElementById("cpf");
    var campoNacionalidade = document.getElementById("nacionalidade");
    var selecionado = campoNacionalidade.options[campoNacionalidade.selectedIndex].value
    console.log(selecionado);
    if (selecionado == "Brazil"){
            campoCPF.disabled=false;
        }else{
            campoCPF.value = "";
            campoCPF.disabled=true;
        }
}
</script>
@endsection