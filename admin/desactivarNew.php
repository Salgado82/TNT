<?php

	include('conexion.php');

	//Conexion
	global $mysqli;

	$id= $_POST['id'];


	//Registra el usuario
	$query_new = mysqli_query($mysqli, "DELETE FROM news WHERE id='".$id."'");

		if ($query_new) {
			
			//$idalerta = '';
			//$status = "NU";
			header ('Location: listaNews.php');
			//echo "Registro existoso y se guarda el archivo";

		} else {

			echo "Error al borrar";

		}

?>