<?php
//abrir y contar molinos de donquijote
 $arch=fopen('don.txt', 'r');
//LEER LINEA A LINEA EN CONTENIDO CON FGETS. si es falso no leemos
 $contador=0;
while (($contenido = fgets($arch)) !== false) {

   //tratar contenido
	//array d strings
	$aPalabras=explode(" ",$contenido);
	//recorremos array en busca molinos
	foreach ($aPalabras as $val) {
		$aux=strtolower($val);
		if ($aux=="molino" || $aux=="molinos") {
			$contador++;
		} 		
	}

   //var_dump($contador);
} 
echo "hay (molinos):" .$contador. "\n";
