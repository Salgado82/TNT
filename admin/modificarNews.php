<? 
	include('conexion.php');

	//Conexion
	global $mysqli;

	$titulo = $_POST['titulo'];
	$info = $_POST['info'];
	$id = $_POST['id'];

	//Update status
	$query_new = mysqli_query($mysqli, "UPDATE news SET titulo='".$titulo."', info='".$info."' WHERE id='".$id."'");


	if ($query_new) {

		header ('Location: listaNews.php');
		
	}else{

		echo "Error al desactivar";
		
	}


?>