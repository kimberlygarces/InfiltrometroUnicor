<?php
require 'conexion2.php';
$nombrePrueba = $_GET['prueba'];

$ciudad = "xxxxxxxxxxxxxxxx";
$tipoSuelo = "xxxxxxxxxxxxxxxx";
$coordenadas = "xxxxxxxx xxxxxxxx";
$observaciones = "xxxxxxxxxxxxxxxxxxxxxxxx";
$dispositivo = "0x1831bf156f44";
$usuario = "gabo";
$fecha="xxxxxxx";
$hora="xxxxxx";

#
#   datos temporales
#   prueba_03-02-2020_16-58
$a="";
list($a, $fecha, $hora) = explode("_", $nombrePrueba);
$fecha = str_replace("-","/",$fecha);
$hora = str_replace("-",":",$hora);

$result = $conn->query('SELECT * FROM (dispositivo, localizacion, suelo, usuario) WHERE ');

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            width: 100%;
        }

        #header {
            background-color: rgb(175, 233, 177);
            height: 40px;
            width: 100%;
            padding: 10px;
            border: 2px solid green;
            border-radius: 1px;
        }
        #div-tablas{
            width: 100%;
        }

        table {
            border: 1px solid gray;
            margin: auto;
        }

        th {
            text-align: center;
            background: rgb(195, 218, 216);
            padding: 3px;
        }

        img {
            float: right;
            width: 170px;
        }
    </style>
</head>

<body>
    <div id="header">
        <img src="../img/unicor-acreditada5.png">
        <h1>Historial de datos</h1>
        <h3><?php echo $nombrePrueba; ?></h3>
    </div>
    <br>
    <div id="div-tablas">
        <table style="width:100%">
            <thead>
                <tr>
                    <th colspan="4" style="width: 100%">Datos generales</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Usuario:</td>
                    <td><?php echo $usuario; ?></td>
                    <td>Dispositivo:</td>
                    <td><?php echo $dispositivo; ?></td>
                </tr>
                <tr>
                    <td>Fecha:</td>
                    <td><?php echo $fecha; ?></td>
                    <td>Hora:</td>
                    <td><?php echo $hora; ?></td>
                </tr>
                <tr>
                    <td>Ciudad:</td>
                    <td><?php echo $ciudad; ?></td>
                    <td>Coordenadas:</td>
                    <td><?php echo $coordenadas; ?></td>
                </tr>
                <tr>
                    <td>Tipo de suelo:</td>
                    <td><?php echo $tipoSuelo; ?></td>
                    <td>Observaciones:</td>
                    <td><?php echo $observaciones; ?></td>
                </tr>
            </tbody>
        </table>
        <br>
        <table>
            <thead> 
                <tr>
                    <th style="width: 110px">N_DATO</th>
                    <th style="width: 110px">Tiempo (s)</th>
                    <th style="width: 110px">Distancia (cm)</th>
                    <th style="width: 110px">I parcial (mm)</th>
                    <th style="width: 110px">Ia (mm)</th>
                </tr>                
            </thead>
            <tbody>
                <?php
                $result = $conn->query('SELECT * FROM historialdatos WHERE Id_Prueba = "' . $nombrePrueba . '"');
                $aux = null;
                $ia = 0;
                $intercaladoCelda = FALSE;
                while ($row = $result->fetch_assoc()) {
                    if($intercaladoCelda){
                        echo '<tr style="background-color: rgb(246,242,253)">';
                        $intercaladoCelda=FALSE;
                    }else{
                        echo '<tr>';
                        $intercaladoCelda=TRUE;
                    }
                    echo '<td>' . $row['N_Dato'] . '</td>';
                    echo '<td>' . $row['tiempo'] . '</td>';
                    echo '<td>' . $row['distancia'] . '</td>';
                    if ($aux == null) {
                        echo '<td>-</td>';
                    } else {
                        echo '<td>' . (($aux - $row['distancia']) * 10) . '</td>';
                    }
                    if ($aux == null) {
                        echo '<td>-</td>';
                    } else {
                        $ia = $ia + ($aux - $row['distancia']);
                        echo '<td>' . ($ia * 10) . '</td>';
                    }
                    $aux = $row['distancia'];
                    echo '</tr>';
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>