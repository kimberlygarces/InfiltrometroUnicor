<?php
  session_start();
  if (isset($_SESSION['Id_Usuario'])) {
  
  }
  require 'conexion.php';

  if (!empty($_POST['Correo']) && !empty($_POST['pass'])) {
    $records = $conn->prepare('SELECT Id_Usuario, Correo, password FROM usuario WHERE Correo = :Correo');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';

    if (count($results) > 0 && password_verify($_POST['Contreaseña'], $results['Contreseña'])) {
      $_SESSION['Id_Usuario'] = $results['Id_Usuario'];
      
      header("Location: ../inicio.php");
    } else {
      $message = 'No registrado!';
    }
  }
?>