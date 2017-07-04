<?php 



function map_text ($texto){

	$res=array();
	$aux=array();

			    		   

				        $texto= quitar($texto);

				     			        
				        // dividir la linea en palabras
				        $palabras = preg_split('/\s/', $texto, -1, PREG_SPLIT_NO_EMPTY);
			  
						$aux=reduce($palabras,$aux);

		
		return $aux;

	}

?>