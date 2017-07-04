<?php


	

	function reduce ($linea,$redu){

		$cuenta=1;

				foreach( $linea as $pal ) {

						error_reporting( error_reporting() & ~E_NOTICE );
						$redu[$pal]+=$cuenta;

					}


			return $redu;	
	}


/*
				foreach( $linea as $pal ) {

						if (!array_key_exists($pal, $redu)){
						$redu[$pal]+=$cuenta;

						
					}

*/

  ?>