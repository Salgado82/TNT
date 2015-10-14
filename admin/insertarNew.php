<?php

	include('conexion.php');

	//Conexion
	global $mysqli;

	$titulo = $_POST['titulo'];
	$info = $_POST['info'];

//comprobamos si ha ocurrido un error.
if ($_FILES["imagen"]["error"] > 0){
	echo "ha ocurrido un error";
} else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 100kb
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	$limite_kb = 100;

	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "../img/news/" . $_FILES['imagen']['name'];
		//comprovamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta)){
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
			if ($resultado){
				echo "el archivo ha sido movido exitosamente";

				//Registra el usuario
		$query_new = mysqli_query($mysqli, "INSERT INTO news (titulo,info,img_news,status) VALUES ('".$titulo."','".$info."','".$_FILES['imagen']['name']."','1')");

		if ($query_new) {
			
			//$idalerta = '';
			//$status = "NU";
			//header ('Location: ../index.php?sta='.$status.'');
			echo "Registro existoso y se guarda el archivo";

		} else {

			echo "Error al subir archivo";

		}


			} else {
				echo "ocurrio un error al mover el archivo.";
			}
		} else {
			echo $_FILES['imagen']['name'] . ", este archivo existe";
		}
	} else {
		echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
	}
}
echo "Titulo: ".$titulo;
?>