  
<?php
  require 'conexion.php';
  $message = '';

  if (!empty($_POST['Id_Usuario']) && !empty($_POST['Nombre_Usuario']) && !empty($_POST['Correo']) && !empty($_POST['Contraseña'])&& !empty($_POST['Id_Dispocitivo'])) {
  $sql = "INSERT INTO usuario values ('".$_POST['Id_Usuario']."','".$_POST['Nombre_Usuario']."','".$_POST['Correo']."','".$_POST['Contraseña']."','".$_POST['Id_Dispocitivo']."')";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':Id_Usuario', $_POST['Id_Usuario']);

    $stmt->bindParam(':Nombre_Usuario', $_POST['Nombre_Usuario']);

    $stmt->bindParam(':correo', $_POST['Correo']);

    $contraseña = md5($_POST['Contraseña']);
    $stmt->bindParam(':contrasena', $contraseña);

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
