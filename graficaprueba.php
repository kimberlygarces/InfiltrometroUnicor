<?php

require_once ("controller/conexion2.php");

$sql = "SELECT tiempo,distancia FROM historial" ;
$resultado = $conn->query($sql);

$valoresx=array();
$valoresy=array();

if(empty($resultado)){
}
else{
  $i=0;
while($registro = mysqli_fetch_array($resultado)){
  
    $valoresx[]=ver[0];
    $valoresx[]=ver[1];
}
}
    


?>