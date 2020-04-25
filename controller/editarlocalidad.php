<?php

//1.contectarse al servidor mysql
        require 'conexion2.php';

		//2.prepara una consulta sql
		echo $sql = "UPDATE localizacion SET ciudad = '".$_POST["ciudadE"]."',
							coordenadas = '".$_POST["coordenadasE"]."',observaciones = '".$_POST["observacionesE"]."'
                            WHERE Id_Prueba=".$_POST["IdE"];
                            

		$conn->query($sql);

        header("Location: ../localizacion.php");

?>