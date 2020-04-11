<?php
		require 'conexion2.php';
		$sql = "INSERT INTO `prueba`(`Id`, `localizacion`, `suelo`, `Observaciones`) values ('".$_POST['Id']."','".$_POST['Ciudad']."','".$_POST['TipoSuelo']."','".$_POST['Observaciones']."')";
				
		$conn->query($sql);
		
        header("Location: ../inicio.php");
		
?>