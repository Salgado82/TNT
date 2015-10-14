<?php 

	include('conexion.php');

	//Conexion
	global $mysqli;

	function obtieneSpon(){

		$sponsors = mysqli_query($mysqli,"SELECT * FROM sponsors");

		return $sponsors; 
	}

	function obtieneSponActivos(){

		$sponsorsAct = mysqli_query($mysqli,"SELECT * from sponsors WHERE status='1'");

		return $sponsorsAct;
	}

?>
