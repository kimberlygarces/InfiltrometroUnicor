<?php
//1.contectarse al servidor mysql
		require 'conexion2.php';

		require_once "../model/data.php";
            $d = new data();
			$prueba = $d->getPrueba();
	
		foreach($prueba as $p){
		// $sql = "INSERT INTO historialdatos values (default,'".$p->N_Dato."','".$p->Id_Prueba."','".$p->tiempo."','".$p->distancia."',default, default)";
		$sql = "INSERT INTO `historialdatos`(`Id`, `N_Dato`, `Id_Prueba`, `tiempo`, `distancia`, `suelo`, `localizacion`) VALUES (default,'".$p->N_Dato."','".$p->Id_Prueba."','".$p->tiempo."','".$p->distancia."',default, default)";	
		//3.ejecutar la consulta
		$conn->query($sql);
		header("Location: ../inicio.php");
		}

				mysqli_select_db($conexion, "infiltrometro");

				mysqli_query($conexion, "SET FOREIGN_KEY_CHECKS = 0");
				mysqli_query($conexion, "TRUNCATE TABLE datosprueba");
				mysqli_query($conexion, "SET FOREIGN_KEY_CHECKS = 1");


				mysqli_close($conexion);


				echo 'Se ha ejecutado la consulta TRUNCATE';
?>