<?php

	include('conexion.php');

	//Conexion
	global $mysqli;

	$id= $_POST['id'];
	$titulo = $_POST['titulo'];
	$info = $_POST['info'];


	//Registra el usuario
	$query_new = mysqli_query($mysqli, "UPDATE news SET titulo='".$titulo."',info='".$info."' WHERE id='".$id."'");

		if ($query_new) {
			
			//$idalerta = '';
			//$status = "NU";
			header ('Location: listaNews.php');
			//echo "Registro existoso y se guarda el archivo";

		} else {

			echo "Error al desactivar";

		}

?>