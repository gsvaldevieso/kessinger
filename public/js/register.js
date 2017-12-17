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