<?php

	if(!empty($_GET["id"])){
        require 'conexion2.php';
		$sql = "DELETE FROM suelo WHERE Id_Prueba = ".$_GET["id"];
		$conn->query($sql);

	}

	header("Location: ../suelo.php");
	exit;
	
?>