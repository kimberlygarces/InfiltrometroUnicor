<?php
//1.contectarse al servidor mysql
		require 'conexion2.php';
		$sql =  "INSERT INTO `localizacion`(`Id_Prueba`, `ciudad`, `coordenadas`, `observaciones`) VALUES (default,'".$_POST['Ciudad']."','".$_POST['Coordenadas']."','".$_POST['Observaciones']."')";
		
		$conn->query($sql);

		header("Location: ../localizacion.php");
		
?>