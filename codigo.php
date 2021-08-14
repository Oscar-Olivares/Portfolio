<?php
	if(isset($_POST['nombre'])){
		$nombre = $_POST['nombre'];
		$correo = $_POST['email'];
		$mensaje = $_POST['message'];

		$mensajes = array();

		if($nombre == ""){
			array_push($mensajes, "El campo Nombre no puede estar vacío.");	
		}

		if($correo == "" || strpos($correo, "@") === false){
			array_push($mensajes, "Ingrese un correo electrónico válido.");
		}

		if($mensaje == ""){
			array_push($mensajes, "El campo de texto no puedo estar vacío.");
		}

		if(count($mensajes) > 0){
			echo "<div class='error'>";

			for($i=0; $i<count($mensajes); $i++){
				echo "<lo>". $mensajes[$i]. "/i";
			}
		}
		else{
			echo "<div class='correcto'>
					Datos correctos";

		}
		echo "</div>";
	} 
 ?>