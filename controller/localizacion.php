<?php
//1.contectarse al servidor mysql
		$conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
		mysqli_select_db($conexion,"infiltrometro") or die("Error conectandose a la BD ");

		$sql = "INSERT INTO localizacion values (default,'".$_POST['Ciudad']."','".$_POST['Coordenadas']."','".$_POST['Observaciones']."')";
		//3.ejecutar la consulta
		mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));	
        
        header("Location: ../localizacion.php");
		
?>