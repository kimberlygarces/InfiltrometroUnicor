<?php
session_start();
if (isset($_SESSION['admin'])) {
    header("location:admin.php");
}
if (!isset($_POST['id']) || !isset($_POST['pass'])) {
    header("location:loginadmin.php");
}

$id = $_POST['id'];
$pass = $_POST['pass'];
require 'controller/conexion2.php';
// echo $id."<br>";
// echo $pass."<br>";
$pass=md5($pass);
// echo $pass."<br><br>";
$resultado = $conn->query('SELECT * FROM usuarioroot WHERE (id_admin = "'.$id.'" AND contrasena = "'.$pass.'")');
$filas = $resultado->num_rows;
$conn->close();
if ($filas == !0) {
    // echo "num filas:  ".$filas."<br>";
    $_SESSION['admin'] = "";
    // echo "Sesion:  ".$_SESSION."<br>";
    header("location: admin.php");
} else {
    header('location:loginadmin.php?ci');
}
