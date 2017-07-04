<?php 

$servername = "localhost";
$username = "username";
$password = "password";

/*  Conectarse  y crear conexion  */

$con = new mysqli($servername,$username,$password);

if ($con->connect_error) {
    die('Connect Error (' . $con->connect_errno . ') '
            . $con->connect_error);
}


echo 'Conección Exitosa';


/*   Crear una nueva Base de Datos   */

$create="CREATE DATABASE Proy";
if ($con->query($create)==TRUE) {

		echo "Base de Datos Creada";
}else{

		echo "Error de Creacion de BD  ".$con->error;

}

$con->close();



 ?>