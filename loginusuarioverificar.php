<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header("location:inicio.php");
}
if (!isset($_POST['id']) || !isset($_POST['pass'])) {
    header("location:inicio.php");
}

$correo = $_POST['correo'];
$pass = $_POST['pass'];
require 'controller/conexion2.php';
// echo $id."<br>";
// echo $pass."<br>";
$pass=md5($pass);
// echo $pass."<br><br>";
$resultado = $conn->query('SELECT * FROM usuario WHERE (correo = "'.$correo.'" AND contrasena = "'.$pass.'")');
$filas = $resultado->num_rows;
$conn->close();
if ($filas == !0) {
    // echo "num filas:  ".$filas."<br>";
    $_SESSION['usuario'] = "";
    // echo "Sesion:  ".$_SESSION."<br>";
    header("location: inicio.php");
} else {
    header('location:index.php?ci');
}
