<!DOCTYPE html>
<html lang="en">
<head>
  <title>Infiltrometro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
     
<!--Animacion-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
 
<link rel="stylesheet" type="text/css" href="vista/css/inicio.css">
</head>
<body>

<div class="jumbotron text-center">
<img class="animated  fadeIn" src="img/user.png">
<h1>Inficor</h1>
</div>
  
<div class="container text-center">
  <!-- <img class="animated infinite tada" src="img/user.png"> -->

            <form class="form-signin" action="loginusuarioverificar.php" method="POST">
                <label for="inputEmail" class="sr-only">Usuario</label>
                <input type="email" id="correo" name="correo" class="form-control" placeholder="Usuario" required autofocus>
                <br>                    
                <label for="inputPassword" class="sr-only">Contraseña</label>
                <input type="password" id="password" name="pass" class="form-control" placeholder="Contraseña" required>
                <br>
                <button class="btn btn-lg btn-secondary btn-block" type="submit">Inciar seción</button>
                  
            </form>
</div>
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Nuevo Usuario</h5>
      </li>
      <li class="list-inline-item">
        <button  onclick="location='registro.php'" type="button" class="btn btn-outline-dark">Registrar</button>
      </li>
    </ul>

  </div>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019: Ingenieria de Sistemas
    <a href="https://mdbootstrap.com/education/bootstrap/"> InfiltrometroUnicor</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>