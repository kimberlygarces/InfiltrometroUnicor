<?php

//1.contectarse al servidor mysql
		$conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
		mysqli_select_db($conexion,"infiltrometro") or die("Error conectandose a la BD ");
		//2.prepara una consulta sql

		$sql = "INSERT INTO usuario values ('".$_POST['Id_Usuario']."','".$_POST['Nombre_Usuario']."','".$_POST['correo']."','".$_POST['contraseña']."','".$_POST['Id_Dispocitivo']."')";
		//3.ejecutar la consulta
		mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));	
        
        header("Location: ../inicio.php");
		
?>