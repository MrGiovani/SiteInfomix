$(document).ready(function(){
    $('.slider').slider();
});

$(document).ready(function () {
    $("a.scrollLink").click(function (event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 1000);
    });
});

$(document).ready(function(){
    $('.tooltipped').tooltip();
});

/*$(document).ready(function(){
    $('#send').click(function() {
        var mensagem = document.getElementById('mensagem').value;
        var nome = document.getElementById('nome').value;
        window.open('mailto:giovanigg08@gmail.com?subject=Contato WebSite de: ' + nome + '&body='+mensagem);
    });
});*/

$(document).ready(function(){
    $('.sidenav').sidenav().on('click tap', 'li a', () => {
        $('.sidenav').sidenav('close');
    });
});
