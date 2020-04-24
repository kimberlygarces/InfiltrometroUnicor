<?php
if (!isset($_POST["d"]) || !isset($_POST["p"]) || !isset($_POST["m"])) {
    exit;
}
$mensaje_array = explode(';', $_POST['m']);

require_once("conexion2.php");
for ($i = 0; $i < count($mensaje_array)/2; $i++) {
    $sql = "INSERT INTO `datosprueba`(`N_Dato`, `Id_Dispositivo`, `Id_Prueba`, `tiempo`, `distancia`) VALUES (NULL, '".$_POST['d']."', '".$_POST['p']."', '".$mensaje_array[$i]."', '".$mensaje_array[$i+1]."')";
    $conn->query($sql); 
}
$conn->close();
        
echo "datos insertados";
?>