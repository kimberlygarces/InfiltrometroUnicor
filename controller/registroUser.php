  
<?php


require 'conexion2.php';

$contrasena=md5($_POST['Contrasena']);
$sql = "INSERT INTO `usuario`(`Id_Usuario`, `Nombre_Usuario`, `correo`, `Contrasena`, `Id_Dispositivo`) VALUES ('".$_POST['Id_Usuario']."', '".$_POST['Nombre_Usuario']."', '".$_POST['Correo']."','".$contrasena."', '".$_POST['Id_Dispocitivo']."')";
   
$conn->query($sql);

    
header("Location: ../registro.php");
