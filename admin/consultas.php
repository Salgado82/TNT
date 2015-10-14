<?php 

	include('conexion.php');

	function obtieneSpon(){

		$sponsors = mysqli_query($mysqli,"SELECT * FROM sponsors");

		return $sponsors; 
	}

	function obtieneSponActivos(){

		//Conexion
		global $mysqli;

		$sponsorsAct = mysqli_query($mysqli,"SELECT * from sponsors WHERE status='1'");

		return $sponsorsAct;
	}

?>
