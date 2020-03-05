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
    $datosX=json_encode($valoresx);
    $datosY=json_encode($valoresy);
?>

<div class="graficalinial">

</div>

<script type="text/javascript">

function crearCadenaLinial(json){
  var parsed = JSON.parse(json);
  var=arr[];
  for(var x in parsed){
    arr.push(parsed[x]);
  }

  return arr;
}

</script>

<script type="text/javascript">

datosX=crearCadenaLinial('<?php echo $datosX?>');
datosY=crearCadenaLinial('<?php echo $datosY?>');
 
 var trace1{
   x: datosX,
   Y: datosY,
   type: 'scatter'
 };

 var data = [trace1];

 plotly.newPlot('graficaLinial', data); 

</script>