<?php

//1.contectarse al servidor mysql
// $conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
// mysqli_select_db($conexion,"infiltrometro") or die("Error conectandose a la BD ");
require 'conexion2.php';
$sql = "INSERT INTO dispositivo values ('".$_POST['Id_Dispositivo']."','".$_POST['VersionDispo']."','".$_POST['DescripcionDispo']."')";
// mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));	
$conn->query($sql);
$conn->close();

header("Location: ../index.php");		
?>