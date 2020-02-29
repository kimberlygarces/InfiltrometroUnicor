<?php
//1.contectarse al servidor mysql
		$conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
		mysqli_select_db($conexion,"infiltrometro") or die("Error conectandose a la BD ");

        $sql2 = "INSERT INTO suelo values (default,'".$_POST['TipoSuelo']."','".$_POST['Observaciones2']."')";
		//3.ejecutar la consulta
		mysqli_query($conexion, $sql2) or die("ERROR: ".mysqli_error($conexion));	

        
        header("Location: ../suelo.php");
		
?>