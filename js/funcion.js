$(function() {

    callGallery();    
     $('#show-image').click(function( event ) {
        event.preventDefault();
        //$('#show-image>img').remove();
        $('#show-image').hide();
    });
    /*  $('#imagen-principal').click(function( event ) {
        event.preventDefault();
            var data = $(this).attr('src');
            $('#show-image>img').remove();
            $('#show-image').append("<img src='"+data+"'/>");
            $('#show-image').show();
    }); */
    function callGallery(){
        $.get("galeria.php", function(data) {
        $('#galeria').append(data);
            });
      //$('#galeria').append('galeria.php');
    }
    $('#frmContacto').submit(function( event ) {
    	event.preventDefault();
    	var proceed = true;
            var data = $(this).serialize();
    		$.ajax({
                type: 'POST',
                url: 'mandaMail.php',
                data: data,
                // Mostramos un mensaje con la respuesta de PHP
                success: function(data) {
                	$('#frmContacto').hide();
                    $('#respuesta').append(data);
                    $('#respuesta').slideDown();
                }
            })     

    });

});