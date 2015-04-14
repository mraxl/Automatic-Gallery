$(function() {

    callGallery();    
     $('#show-image').click(function( event ) {
        event.preventDefault();
        //$('#show-image>img').remove();
        $('#show-image').hide();
    });
    function callGallery(){
        $.get("galeria.php", function(data) {
        $('#galeria').append(data);
            });
    }

});