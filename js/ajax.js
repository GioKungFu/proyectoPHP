
$(document).ready(function() {

    $('#nav').on('click', '.links', function(event) {
        if ($('.active').length) {
            $('.links').removeClass('active');
        }
       
        $(this).addClass('active');
    });

    $('#inicio').click(function(event) {
        event.preventDefault();
      
        link('http://localhost/proyectoPHP/index.php/controladordatos/inicio', '#cambio');
    });

    $('#documentos').click(function(event) {
        event.preventDefault();
       
        link('http://localhost/proyectoPHP/index.php/controladordatos/documentos', '#cambio');
    });

    $('#publicar').click(function(event) {
        event.preventDefault();
      
        link('http://localhost/proyectoPHP/index.php/controladordatos/publicar', '#cambio');
    });

    $('#servicios').click(function(event) {
        event.preventDefault();
      
        link('http://localhost/proyectoPHP/index.php/controladordatos/servicios', '#cambio');
    });
     $('#contactenos').click(function(event) {
        event.preventDefault();
      
        link('http://localhost/proyectoPHP/index.php/controladordatos/contactenos', '#cambio');
    });
  

});


function link(url, update) {
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'html',
        success: function(respuesta)
        {
            $(update).html(respuesta);
            
        }
    });

}


