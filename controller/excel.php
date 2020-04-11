<?php
$nombrePrueba = $_GET['prueba'];
header('Content-type:application/xls');
header('Content-Disposition: attachment; filename='.$nombrePrueba.'.xls');

require_once('conexion2.php');

?>
<table border="1">
    <tr></tr>
    <tr>
        <th></th>
        <th colspan="5"><b>Prueba de infiltracion</b></th>
        <th></th>
    </tr>
    <tr><td></td><td>METODO</td><td colspan="4"> </td><td></td></tr>
    <tr><td></td><td>LOCALIZACION</td><td colspan="4"> </td><td></td></tr>
    <tr><td></td><td>TIPO DE SUELO</td><td colspan="4"> </td><td></td></tr>
    <tr><td></td><td>OBSERVADOR</td><td colspan="4"> </td><td></td></tr>
    <tr><td></td><td>FECHA</td><td colspan="4"> </td><td></td></tr>
    <tr><td></td><td>HORA INICIO</td><td colspan="4"> </td><td></td></tr>
    <tr><td></td><td></td><td colspan="4"> </td><td></td></tr>

    <tr>
        <td></td>
        <td>tA (MIN)</td>
        <td>L escala(cm)</td>
        <td>Cambio (cm)</td>
        <td>I Parcial (mm)</td>
        <td>Ia (mm)</td>
        <td></td>
    </tr>

    <?php
    $result = $conn->query('SELECT * FROM historialdatos WHERE Id_Prueba = "' . $nombrePrueba . '"');
    $aux = null;
    $ia = 0;

    while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
        <td></td>
        <td> <?php echo $row['tiempo'] ?> </td>
        <td> <?php echo $row['distancia'] ?> </td>
        <td> <?php echo "-" ?> </td>
        <td> <?php if ($aux == null) {
                        echo '-';
                    } else {
                        echo (($row['distancia'] - $aux) * 10);
                    } ?> </td>
        <td> <?php if ($aux == null) {
                        echo '-';
                    } else {
                        $ia = $ia + ($row['distancia'] - $aux);
                        echo ($ia * 10);
                    }
                    $aux = $row['distancia']; ?> </td>
        <td></td>
    </tr>
    <?php  } 
    $conn->close()?>
</table>

