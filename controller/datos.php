<?php
			//Conectarse al servidor mysql
		$conexion = mysqli_connect("localhost","root","","infiltrometro") or die("ERROR: ".mysqli_error($conexion));
		  
		$sql = "SELECT * FROM datosprueba";
      //EJECUTAR LA CONSULTA
    $resultado = mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));

    while ($dat=mysqli_fetch_assoc($resultado)){

      $arr[]=$dat;
  }

  echo json_encode($arr);




?>
  

  