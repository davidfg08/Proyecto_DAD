<?php 




function map ($fl){

	$res=array();
	$aux=array();

	while (!feof($fl)) {

						$linea=fgets($fl);
		    
						$linea= quitar($linea);

				        $linea = strtolower(trim($linea));
				        

				     
				        // dividir la linea en palabras
				        $palabras = preg_split('/\s/', $linea, -1, PREG_SPLIT_NO_EMPTY);

				        
			  
			  			// llamar a la funcion reduce
						$aux=reduce($palabras,$aux);

		

		}// fin de lectura de archivo

		return $aux; //retornar arreglo con totales

		fclose($fl); // cerrar archivo
	}

?>