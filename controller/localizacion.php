<?php
//1.contectarse al servidor mysql
		$conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
		mysqli_select_db($conexion,"infiltrometro") or die("Error conectandose a la BD ");
		//2.prepara una consulta sql

		require_once "../model/data.php";
		$d = new data();
		$prueba = $d->getPrueba();

		foreach($prueba as $p){}

		$sql = "INSERT INTO localizacion values ('".$p->Id_Prueba."','".$_POST['Ciudad']."','".$_POST['Coordenadas']."','".$_POST['Observaciones']."')";
		//3.ejecutar la consulta
		mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));	

        $sql2 = "INSERT INTO suelo values ('".$p->Id_Prueba."','".$_POST['TipoSuelo']."','".$_POST['Observaciones2']."')";
		//3.ejecutar la consulta
		mysqli_query($conexion, $sql2) or die("ERROR: ".mysqli_error($conexion));	

        
        header("Location: ../index.php");
		
?>