<?php 

	include('conexion.php');

<<<<<<< HEAD
=======

>>>>>>> 0a1813810fde6eb61d40189f26ae3b5e3dca7ac5
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

	function obtieneNewsActivas(){

		$newsAct = mysqli_query($mysqli,"SELECT * from news WHERE status='1'");

		return $newsAct;
	}

	function obtieneNews(){

		global $mysqli;

		$news = mysqli_query($mysqli,"SELECT * from news");

		return $news;
	}

?>
