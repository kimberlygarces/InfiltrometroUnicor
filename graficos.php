<?php
$idprueba=$_GET['Id'];

if (!isset($_GET['Id'])) {
  header('location:historial.php');
}
require 'controller/conexion2.php';
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graficas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://cdn.plot.ly/plotly-latest.min.js'></script>


</head>

<body>

<?php

require_once ("controller/conexion2.php");

$sql = "SELECT * FROM historialdatos WHERE Id_Prueba = '" . $_GET["Id"] . "'";
$resultado = $conn->query($sql);
while ($registro = $resultado->fetch_assoc()) {

    $valorX[]=$registro["N_Dato"];
    $valorY[]=$registro["tiempo"];
    $valorY2[]=$registro["distancia"];



}

$datosY=json_encode($valorX, JSON_NUMERIC_CHECK);
$datosX=json_encode($valorY, JSON_NUMERIC_CHECK);
$datosY2=json_encode($valorY2, JSON_NUMERIC_CHECK);





?>  

<div class="container">
<?php echo  "N° Datos","$datosY" ?>

 <?php echo "tiempo","$datosX" ?>
 <?php echo "distancia","$datosY2" ?>




    <div class="row">
        <div class="col-sm-12">
    
            <div class="panel panel-primary">
                <div class="panel panel-heading">
                    Graficas

                </div>
                <div class="panel panel-body">
                <div id='myDiv'><!-- Plotly chart will be drawn inside this DIV --></div>
                </div>
            </div> 
        </div>
    </div>
</div>
</body>
</html>

    <script type="text/javascript"> 

    X= <?php echo $datosY ?>;
    Y=<?php echo $datosX ?>;
    Y2= <?php echo $datosY2 ?>;


                var trace1 = {
            x: X,
            y: Y,
            type: 'scatter'
            };

            var trace2 = {
            x: X,
            y2: Y2,
            type: 'scatter'
            };


            var data = [trace1, trace2];

            Plotly.newPlot('myDiv', data);


    </script>