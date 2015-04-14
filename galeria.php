<script type="text/javascript">
//FIN image-tumb
    $('.image-tumb>img').click(function( event ) {
        event.preventDefault();
            var data = $(this).attr('src');
            $('#imagen-principal>img').remove();
            $('#imagen-principal').append("<img src='"+data+"'/>");
    });  
    $('#imagen-principal').click(function( event ) {
        event.preventDefault();
        var data = $(this).children("img:first").attr('src');
        $('#show-image>img').remove();
        $('#show-image').append("<img src='"+data+"'/>");
        $('#show-image').show();    
    });
    
</script>
<?php
require("functions.php");
$files=get_files("images",array('jpeg','jpg','png'));
$i=0;
foreach($files as $file){
	if($i==0){
		echo "<figure id='imagen-principal'>
			<img src='images/$file'/>
			</figure>";
		echo "<div id='contiene-imagenes'>
			  <div id='slide-images'>";
		echo "<figure class='image-tumb first'>
			  	<img src='images/$file' />
			  </figure>";
			  $i++;
		}else{
			echo "<figure class='image-tumb'>
			  		<img src='images/$file' />
			  	</figure>";
		}
}


?>