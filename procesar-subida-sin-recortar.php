<?php

	include("./includes/class.upload.php");

	$imagen = new upload($_FILES['imagenes']);

	if ($imagen->uploaded) 
	{
		$imagen->image_resize         		= false; // default is false
		$imagen->file_new_name_body   		= 'paisaje-peru'; // agregamos un nuevo nombre
		$imagen->image_watermark      		= 'watermark.png'; // marcado de agua
		$imagen->image_watermark_position 	= 'BR'; // donde se ub icara el marcado de agua. Bottom Right		
		$imagen->process('imagenes/');	

		echo 'La imagen a sido recortada';

	} 
	else 
	{
		echo 'error : ' . $imagen->error;
	}	

?>