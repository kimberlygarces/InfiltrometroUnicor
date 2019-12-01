<?php
//1.contectarse al servidor mysql
		$conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
		mysqli_select_db($conexion,"infiltrometro") or die("Error conectandose a la BD ");
		//2.prepara una consulta sql

		require_once "../model/data.php";
            $d = new data();
			$prueba = $d->getPrueba();
	
		foreach($prueba as $p){
		$sql = "INSERT INTO historialdatos values (default,'".$p->N_Dato."','".$p->Id_Prueba."','".$p->tiempo."','".$p->distancia."')";
	
		//3.ejecutar la consulta
		mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));	
		header("Location: ../index.php");
		}

		//Ejemplo curso PHP aprenderaprogramar.com


				mysqli_select_db($conexion, "infiltrometro");

				mysqli_query($conexion, "TRUNCATE TABLE datosprueba");

				mysqli_close($conexion);

				// Cerramos la conexion con la base de datos

				echo 'Se ha ejecutado la consulta TRUNCATE';
?>