$(document).ready(function() {
    $('#issn').mask('AAAA-AAAY', {
        'translation': {
            A: {
                pattern: /[0-9]/
            },
            Y: {
                pattern: /[X0-9]/
            }
        }
    });
});

$(document).ready(function() {
    $('select').material_select();
});

$(document).ready(function() {
    var lineDrawing = anime({
        targets: '#lineDrawing .lines path',
        strokeDashoffset: [anime.setDashoffset, 0],
        easing: 'easeInOutSine',
        duration: 1500,
        delay: function(el, i) {
            return i * 250
        },
        direction: 'alternate',
        loop: false
    });
});

var campoIssn = document.querySelector("#issn");
var campoTitulo = document.querySelector("#titulo");
var campoDescricao = document.querySelector("#descricao");
var campoImagem = document.querySelector("#imagem");
var botao = document.querySelector("#submeter");
var form = document.querySelector("#form-periodico");

botao.addEventListener('click', function(event) {
    event.preventDefault();
    if (campoIssn.value.length != 9 || campoTitulo.value == "" || campoDescricao.value == "" || campoImagem.value == "") {
        swal(
            'Oops...',
            'Preencha todos os campos adequadamente',
            'error'
        )
    } else {
        form.submit();
    }
})

particlesJS.load('particles-js', '/config/particulasLinhas.json', function() {});