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

	function obtieneNewsActivas(){

		$newsAct = mysqli_query($mysqli,"SELECT * from news WHERE status='1'");

		return $newsAct;
	}

	function obtieneNews(){

		global $mysqli;

		$news = mysqli_query($mysqli,"SELECT id,titulo,info,img_news,status,date_format(fecha,'%d/%m/%Y') AS fechanews FROM news");
		return $news;
	}

?>
