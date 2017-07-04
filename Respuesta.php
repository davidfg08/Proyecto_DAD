<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<title>Respuesta</title>
</head>
<body>

<?php





	//include './dba.php';
	include './map.php';  // se utiliza cuando se quiere leer un archivo
	include './map_text.php'; // se utiliza cuando se quiere leer el texto del input
	include './reduce.php';
	

	function probar($data){

		$data = trim($data);  // eliminar chars innecesarios
	    $data = stripslashes($data); // eliminar backslashs
	    $data = htmlspecialchars($data); // eliminar chars especiales
	    $data = strtolower($data);
	    return $data;

	}

function quitar ($l){

	$l = str_replace(","," ",$l);
	$l = str_replace("."," ",$l);
	$l = str_replace(":"," ",$l);
	$l = str_replace("\""," ",$l);
	$l = str_replace("("," ",$l);
	$l = str_replace(")"," ",$l);

	return $l;
}



	
	$arreglo=array();


	if($_POST['rad']=="write"){  // ingreso por campo de texto



				$entrada=probar($_POST['texto']);

				$palabra=probar($_POST['palabra']);

				//llamar a la funcion map en map_text.php
				$arreglo=map_text($entrada);

				// aqui está el numero de ocurrencias de la palabra
				$fin=$arreglo[$palabra];

				if ($fin<1 ){
					$fin=0;
				}

	}else{

			if ($_POST['rad']=="upload"){  // ingreso por archivo


					
						copy($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);
						
						$nombre=$_FILES['archivo']['name'];
						
						$palabra=probar($_POST['palabra']);

						//echo "la palabra es: ".$palabra;
						//echo "<br>";
						$fl= fopen($nombre, "r") or die("No se pudo abrir el archivo");


						//llamar a la funcion map en map.php
						$arreglo=map($fl); 

						
						// aqui está el numero de ocurrencias de la palabra
						$fin=$arreglo[$palabra];

						if ($fin<1 ){
							$fin=0;
				}

			}

	}





?>
	<div class="container resp">

			<div class="panel panel-default">
       			<div class="panel-body">

					<div class="row">

				<label class="text-center" id="tipotext"><h4><b>La palabra </b></h4></label>
				<label class="text-center" id="pal"><h4><b>"<?php echo $palabra ?>"</b></h4></label>
				<label class="text-center" id="tipotext"><h4><b>aparece un total de:</b></h4></label>
				<input type="text" name="resultado" value="<?php echo $fin ?>">
				<label class="text-center" id="tipotext"><h4><b> veces</b></h4></label>	
					
					</div>

				</div>
			</div>	

	</div>
	
</body>
</html>