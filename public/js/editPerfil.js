$(document).ready(function() {
    $('#cpf').mask('000.000.000-00');

    jQuery(function($) {
        var fileDiv = document.getElementById("picture");
        var fileInput = document.getElementById("picture");

        fileInput.addEventListener("change", function(e) {
            var files = this.files
            showThumbnail(files)
        }, false)

        function showThumbnail(files) {
            for (var i = 0; i < files.length; i++) {
                var file = files[i]
                var imageType = /image.*/

                if (!file.type.match(imageType)) {
                    console.log("Not an Image");
                    continue;
                }

                var image = document.createElement("img");
                var thumbnail = $("#thumbnail");

                image.file = file;
                image.classList.add('img-circle');
                image.classList.add('img-responsive');
                thumbnail.html(image);

                var reader = new FileReader()
                reader.onload = (function(aImg) {

                    return function(e) {
                        aImg.src = e.target.result;
                    };
                }(image))

                var ret = reader.readAsDataURL(file);
                var canvas = document.createElement("canvas");
                ctx = canvas.getContext("2d");
                image.onload = function() {
                    ctx.drawImage(image, 100, 100)
                }
            }
        }
    });
});
var d = new Date();
d.setFullYear(d.getFullYear() - 100);

$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    max: new Date(),
    selectYears: 100,
    format: 'dd/mm/yyyy',
    today: 'Hoje',
    clear: 'Limpar',
    close: 'Ok',
    monthsFull: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
    monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mar', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
    weekdaysFull: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
    weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
    weekdaysLetter: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
    labelMonthNext: 'Próximo Mês',
    labelMonthPrev: 'Mês anterior',
    labelMonthSelect: 'Selecione o Mês',
    labelYearSelect: 'Selecione o ano',
    closeOnSelect: false // Close upon selecting a date,
});

particlesJS.load('particles-js', '/config/package.json', function() {});