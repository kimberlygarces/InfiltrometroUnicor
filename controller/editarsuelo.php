<?php

//1.contectarse al servidor mysql
        require 'conexion2.php';

		//2.prepara una consulta sql
		echo $sql = "UPDATE suelo SET TipoSuelo = '".$_POST["TipoSueloE"]."',Observaciones = '".$_POST["ObservacionesE"]."'
                            WHERE Id_Prueba=".$_POST["IdE"];
                            

		$conn->query($sql);

        header("Location: ../suelo.php");

?>