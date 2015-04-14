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
$folder="images";
$files=get_files($folder,array('jpeg','jpg','png'));

$i=0;
foreach($files as $file){
	if($i==0){
		echo "<figure id='imagen-principal'>
			<img src='$folder/$file'/>
			</figure>";
		echo "<div id='contiene-imagenes'>
			  <div id='slide-images'>";
		echo "<figure class='image-tumb first'>
			  	<img src='$folder/$file' />
			  </figure>";
			  $i++;
		}else{
			echo "<figure class='image-tumb'>
			  		<img src='$folder/$file' />
			  	</figure>";
		}
}


?>