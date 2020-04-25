<?php

	if(!empty($_GET["id"])){
        require 'conexion2.php';
		$sql = "DELETE FROM localizacion WHERE Id_Prueba = ".$_GET["id"];
		$conn->query($sql);

	}

	header("Location: ../localizacion.php");
	exit;
	
?>