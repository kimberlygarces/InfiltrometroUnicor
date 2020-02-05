<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['admin'])) {
  header("location:loginadmin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Registro Infiltrometro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <!--Animacion-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

  <link href="css/Inicio.css" rel="stylesheet">


</head>

<body>

  <div class="jumbotron text-center">
    <h1>Infiltrometro</h1>
  </div>

  <div class="container text-center">

    <form action="controller/registroDispositivo.php" method="post" class="form-group">

      <div class="row">
        <div class="col-sm-6">
          <br>
          <input type="text" name="Id_Dispositivo" class="form-control" placeholder="Id dispositivo" required autofocus>
          <br>
          <input type="text" name="VersionDispo" class="form-control" placeholder="Versión" required autofocus>
          <br>
          <input type="test" name="DescripcionDispo" class="form-control" placeholder="Descripcion" required autofocus>
          <br>
          <button class="btn btn-lg btn-secondary btn-block" type="submit">Registrar producto</button>

        </div>
        <div class="col-sm-6">
          <br>

          <br>
        </div>
      </div>



    </form>
  </div>


  <footer class="page-footer font-small unique-color-dark pt-4">

    <div class="container">
      <a href="controller/cerrarSesion.php?url=index.php">Cerrar sesión</a>


    </div>

    <div class="footer-copyright text-center py-3">© 2019: Ingenieria de Sistemas
      <a href="https://mdbootstrap.com/education/bootstrap/"> InfiltrometroUnicor</a>
    </div>

  </footer>
  <!-- Footer -->

</body>

</html>