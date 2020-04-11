  
<?php
require 'conexion2.php';

$sql = "SELECT * FROM `usuario` WHERE correo=1 " ;
$resultado = $conn->query($sql);
if(mysqli_num_rows($resultado)>0){

    if(empty($resultado)){
     }
     else{
        $contrasena=md5($_POST['Contrasena']);

        $sql = "INSERT INTO `usuario`(`Id_Usuario`, `Nombre_Usuario`, `correo`, `Contrasena`, `Id_Dispositivo`) VALUES ('".$_POST['Id_Usuario']."', '".$_POST['Nombre_Usuario']."', '".$_POST['Correo']."','".$contrasena."', '".$_POST['Id_Dispocitivo']."')";
           
        $conn->query($sql);

     }
   }
 }else{
   echo"<script type=\"text/javascript\">alert('No hay prueba en curso'); window.location='inicio.php';</script>"; 
 }
}

// $buscarusuario = "SELECT * FROM `usuario` WHERE correo=1 ";

// $result = $conn->query($buscarUsuario);

// // $count = mysqli_num_rows($result);

// if (mysqli_num_rows($result) == 1) {
//     header("Location: ../index.php");
//     mysqli_close($conexion);

// }
// else{
// $contrasena=md5($_POST['Contrasena']);

// $sql = "INSERT INTO `usuario`(`Id_Usuario`, `Nombre_Usuario`, `correo`, `Contrasena`, `Id_Dispositivo`) VALUES ('".$_POST['Id_Usuario']."', '".$_POST['Nombre_Usuario']."', '".$_POST['Correo']."','".$contrasena."', '".$_POST['Id_Dispocitivo']."')";
   
// $conn->query($sql);

    
// header("Location: ../registro.php");


// }    
    // echo"<script type=\"text/javascript\">alert('Claves no coinciden'); window.location='../registro.php';</script>"; 


?>