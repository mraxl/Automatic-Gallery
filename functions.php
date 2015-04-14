<?php
//Obtiene Archivos
function get_files($images_dir,$exts = array('jpeg')) {
	$files = array();
	if($handle = opendir($images_dir)) {
		while(false !== ($file = readdir($handle))) {
			$extension = strtolower(get_file_extension($file));
			if($extension && in_array($extension,$exts)) {
				$files[] = $file;
			}
		}
		closedir($handle);
	}
	return $files;
}

//Obtiene Extensión
function get_file_extension($file_name) {
	return substr(strrchr($file_name,'.'),1);
}

?>