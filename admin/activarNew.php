<?php

	include('conexion.php');

	//Conexion
	global $mysqli;

	$id= $_POST['id'];


	//Registra el usuario
	$query_new = mysqli_query($mysqli, "UPDATE news SET status=1 WHERE id='".$id."'");

		if ($query_new) {
			
			//$idalerta = '';
			//$status = "NU";
			header ('Location: listaNews.php');
			//echo "Registro existoso y se guarda el archivo";

		} else {

			echo "Error al desactivar";

		}

?>