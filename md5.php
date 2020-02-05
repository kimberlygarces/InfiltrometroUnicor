<?php
echo md5("1234")."<br>";
echo md5('5678');
$id = "gabriel";
$pass = "674f3c2c1a8a6f90461e8a66fb5550ba";
// require 'controller/conexion.php';
// $conn = new mysqli("localhost", "root", "", "infiltrometro");
require 'controller/conexion2.php';

// $conn->query('INSERT INTO usuarioroot (id_admin, contrasena, nombre) VALUES ("kimberly", "674f3c2c1a8a6f90461e8a66fb5550ba", "Gabriel Espitia Genes")');
$resultado = $conn->query('SELECT * FROM usuarioroot WHERE (id_admin = "'.$id.'" AND contrasena = "'.$pass.'")');
$filas = $resultado->num_rows;

// $resultado = $conn->prepare('SELECT count(*) FROM usuarioroot WHERE id_admin = '.$id.' AND contrasena = '.$pass);
// $resultado->execute();
// $filas = $resultado->get_result();
echo "<br>";
echo "<br>".$filas;
$conn->close();



    // // prepare sql and bind parameters
    // $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");
    // $stmt->bindParam(':firstname', $firstname);
    // $stmt->bindParam(':lastname', $lastname);
    // $stmt->bindParam(':email', $email);

    // // insert a row
    // $firstname = "John";
    // $lastname = "Doe";
    // $email = "john@example.com";
    // $stmt->execute();