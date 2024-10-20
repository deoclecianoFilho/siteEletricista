/*$(document).ready(function() {
    $('nav a').hover(function(){
        $('nav li').removeClass('selected');
        $(this).parent().addClass('selected')
    })

    // $('#meu-botao').click(function() {
    //     alert('Botão clicado!');
    // });
});*/

$(function(){
    $('nav.mobile').click(function(){

        var lis = $('nav.mobile ul');

        if(lis.is(':hidden') == true){
            lis.slideToggle();
            var icone = $('.btn-open i');
            icone.removeClass('fa-bars');
            icone.addClass('fa-xmark')
        }else{
            lis.slideToggle();
            var icone = $('.btn-open i');
            icone.removeClass('fa-xmark');
            icone.addClass('fa-bars')
        }
    })

    if($('target').length > 0){
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html,body').animate({scrollTop:divScroll},1000);
    }
    carragerDinamico();
    function carragerDinamico(){
        $('[realtime]').click(function(){
            var pagina = $(this).attr('realtime');
            $('.inclusao').load(INCLUDE_PATH+'pages/'+pagina+'.php');
            return false;
        })
    }

})
