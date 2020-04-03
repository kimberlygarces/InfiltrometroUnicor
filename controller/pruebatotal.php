<?php

		require 'conexion2.php';
		$sql =  "INSERT INTO `Prueba`(`Id`, `Ciudad`, `TipoSuelo`, `Observaciones`) VALUES ('".$_POST['Id']."','".$_POST['Ciudad']."','".$_POST['TipoSuelo']."','".$_POST['Observaciones']."')";
		$conn->query($sql);
		
        header("Location: ../inicio.php");
		
?>