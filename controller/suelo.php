<?php
//1.contectarse al servidor mysql
		require 'conexion2.php';


		$sql = "INSERT INTO `suelo`(`Id_Prueba`, `TipoSuelo`, `Observaciones`) VALUES (default,'".$_POST['TipoSuelo']."','".$_POST['Observaciones2']."')";
       
		$conn->query($sql);

        
        header("Location: ../suelo.php");
		
?>