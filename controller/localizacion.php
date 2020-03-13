<?php
//1.contectarse al servidor mysql
		require 'conexion2.php';

		$sql = "INSERT INTO localizacion values (default,'".$_POST['Ciudad']."','".$_POST['Coordenadas']."','".$_POST['Observaciones']."')";
		//3.ejecutar la consulta
		$resultado = $conn->query($sql) or die ("Algo ha ido mal en la consulta a la base de datos");
        
        header("Location: ../localizacion.php");
		
?>