<?php
    //Agregamos la librería para genera códigos QR
	require "phpqrcode/qrlib.php";    
	
	//Declaramos una carpeta temporal para guardar la imágenes generadas
	$dir = 'temp/';
	
	//Si no existe la carpeta la creamos
	if (!file_exists($dir))
        mkdir($dir);
	
        //Declaramos la ruta y nombre del archivo a generar
	$filename = $dir.'Qr.png';

        //Parámetros de Configuración
	
	$tamaño = 10; //Tamaño de Pixel
	$level = 'Q'; //Precisión: L = Baja, M = Mediana, Q = Alta, H= Máxima
	$framSize = 3; //Tamaño en blanco
	$contenido = $informacion; //Texto
	
        //Enviamos los parámetros a la Función para generar código QR 
	QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
	
        //Mostramos la imagen generada
	echo '<img src="'.$dir.basename($filename).'"  class="imagen_qr"/>';  
?>