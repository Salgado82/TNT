<?php

	include('conexion.php');

	//Conexion
	global $mysqli;

	$id= $_POST['id'];
	$nombre = $_POST['nombre'];


	//Registra el usuario
	$query_new = mysqli_query($mysqli, "UPDATE sponsors SET nombre='".$nombre."' WHERE id='".$id."'");

		if ($query_new) {
			
			//$idalerta = '';
			//$status = "NU";
			header ('Location: listaSpon.php');
			//echo "Registro existoso y se guarda el archivo";

		} else {

			echo "Error al modificar";

		}

?>