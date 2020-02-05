  
<?php
  require 'conexion.php';
  $message = '';

  if (!empty($_POST['Id_Usuario']) && !empty($_POST['Nombre_Usuario']) && !empty($_POST['Correo']) && !empty($_POST['Contrasena'])&& !empty($_POST['Id_Dispocitivo'])) {
  $sql = "INSERT INTO usuario (Id_Usuario, Nombre_Usuario, Correo, Contrasena, Id_Dispositivo) values (:Id_Usuario, :Nombre_Usuario, :correo, :contrasena, :Id_Dispocitivo)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':Id_Usuario', $_POST['Id_Usuario']);

    $stmt->bindParam(':Nombre_Usuario', $_POST['Nombre_Usuario']);

    $stmt->bindParam(':correo', $_POST['Correo']);

    $contrasena = md5($_POST['Contrasena']);
    $stmt->bindParam(':contrasena', $contrasena);

    $stmt->bindParam(':Id_Dispocitivo', $_POST['Id_Dispocitivo']);
       
    if ($stmt->execute()) {
      header("Location: ../inicio.php");
    } else {
      $message = 'Error al crear usuario';
    }
  }

?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
