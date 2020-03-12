<?php
			//Conectarse al servidor mysql
      $conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
      mysqli_select_db($conexion,"infiltrometro") or die("Error conectandose a la BD ");
      		  
		$sql = "SELECT * FROM datosprueba";
    $resultado = mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));

    while ($dat=mysqli_fetch_assoc($resultado)){

      $arr[]=$dat;
  }

  echo json_encode($arr);

//   require 'controller/conexion2.php';

//   $sql = "SELECT * FROM datosprueba";
//   $resultado = $conn->query($sql);
//     $ia = 0;
//     while ($registro = $resultado->fetch_assoc()) {
// $registro[""];

  
//     }
//     echo json_encode($registro);


?>
  

  