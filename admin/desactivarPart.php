<?php

	include('conexion.php');

	//Conexion
	global $mysqli;

	$id= $_POST['id'];


	//Registra el usuario
	$query_new = mysqli_query($mysqli, "UPDATE participantes SET estado=0 WHERE id='".$id."'");

		if ($query_new) {
			
			//$idalerta = '';
			//$status = "NU";
			header ('Location: listaParticipantes.php');
			//echo "Registro existoso y se guarda el archivo";

		} else {

			echo "Error al desactivar";

		}

?>