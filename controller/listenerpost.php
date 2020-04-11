<?php
if (!isset($_POST["d"]) || !isset($_POST["p"]) || !isset($_POST["m"])) {
    exit;
}
$mensaje_array = explode(';', $_POST['m']);

require_once("conexion2.php");
$sql = "INSERT INTO `datosprueba`(`N_Dato`, `Id_Dispositivo`, `Id_Prueba`, `tiempo`, `distancia`) VALUES (NULL, '".$_POST['d']."', '".$_POST['p']."', '".$mensaje_array[0]."', '".$mensaje_array[1]."')";
$conn->query($sql);         
echo "datos insertados";
?>