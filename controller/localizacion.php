<?php
//1.contectarse al servidor mysql
		require 'conexion2.php';
		$sql =  "INSERT INTO `localizacion`(`Id_Prueba`, `ciudad`, `coordenadas`, `observaciones`) VALUES (default,'".$_POST['Ciudad']."','".$_POST['Coordenadas']."','".$_POST['Observaciones']."')";
		// $sql = "INSERT INTO localizacion values (default,'".$_POST['Ciudad']."','".$_POST['Coordenadas']."','".$_POST['Observaciones']."')";
		//3.ejecutar la consulta
		$conn->query($sql);

		header("Location: ../localizacion.php");
		
?>