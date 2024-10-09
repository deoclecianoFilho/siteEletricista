$(document).ready(function() {
    $('nav a').hover(function(){
        $('nav li').removeClass('selected');
        $(this).parent().addClass('selected')
    })

    // $('#meu-botao').click(function() {
    //     alert('Botão clicado!');
    // });
});

