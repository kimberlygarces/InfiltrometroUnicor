<?php
	// 		//Conectarse al servidor mysql
  //     $conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
  //     mysqli_select_db($conexion,"infiltrometro") or die("Error conectandose a la BD ");
      		  
	// 	$sql = "SELECT * FROM datosprueba";
  //   $resultado = mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));

  //   while ($dat=mysqli_fetch_assoc($resultado)){

  //     $arr[]=$dat;
  // }

  // echo json_encode($arr);

//   require 'controller/conexion2.php';

//   $sql = "SELECT * FROM datosprueba";
//   $resultado = $conn->query($sql);
//     $ia = 0;
//     while ($registro = $resultado->fetch_assoc()) {
// $registro[""];

  
//     }
//     echo json_encode($registro);

// require 'controller/conexion2.php';
// $sql = "SELECT * FROM datosprueba";
// mysqli_set_charset($conn, "utf8"); //formato de datos utf8

// if(!$result = mysqli_query($conn, $sql)) die();

// $datosprueba = array(); //creamos un array

// while($row = mysqli_fetch_array($result)) 
// { 
//     $id=$row['N_Dato'];
//     $nombre=$row['tiempo'];
//     $edad=$row['distancia'];
  
    

//     $datosprueba[] = array('N_Dato'=> $N_Dato, 'tiempo'=> $tiempo, 'distancia'=> $distancia);

// }
    
// //desconectamos la base de datos
// $close = mysqli_close($conexion) 
// or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

// //Creamos el JSON
// $json_string = json_encode($datosprueba);
// echo $json_string;

// ?>
  

  <?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "infiltrometro";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$sql = "SELECT * FROM datosprueba";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$prueba = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 
	$N_Dato=$row['N_Dato'];
	$Id_Dispositivo=$row['Id_Dispositivo'];
	$Id_Prueba=$row['Id_Prueba'];
	$distancia=$row['distancia'];
	$tiempo=$row['tiempo'];

	

	$prueba[] = array('N_Dato'=> $N_Dato, 'Id_Dispositivo'=> $Id_Dispositivo, 'Id_Prueba'=> $Id_Prueba, 'distancia'=> $distancia,
						'tiempo'=> $tiempo);

}
	
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

//Creamos el JSON
//$clientes['clientes'] = $clientes;
$json_string = json_encode($prueba);
echo $json_string;

//Si queremos crear un archivo json, sería de esta forma:
/*
$file = 'clientes.json';
file_put_contents($file, $json_string);
*/
	

?>