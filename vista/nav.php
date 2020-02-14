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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/datos.js"></script>

  <!-- animacion  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

  <style>
body {font-family: Arial, Helvetica, sans-serif;}


#navbar {
  width: 100%;
  background-color: #EDBB99;
  overflow: auto;
  border-radius: 10px;
}

.navbar a {
  color: #f2f2f2;
  text-align: center;
  padding: 11px 16px;
  text-decoration: none;
  font-size: 20px;
}

.navbar a:hover {
  background-color: #1CE32B;
  padding: 14px 16px;
  border-radius: 10px;
  
}

.navbar-brand {
  background-color: #41F308;
  border-radius: 20px;
  
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }


}

</style>

</head>
<body>


<nav class="navbar navbar-expand-md bg-dark navbar-dark" id="navbar">
  <!-- Brand -->
  <a class="navbar-brand" href=inicio.php><i class="fa fa-home fa-fw fa-lg"></i><b>Inficor</b></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="Prueba_en_curso.php"><i class="fa fa-pencil fa-fw"></i>Prueba en curso</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="historial.php"><i class="fa fa-book fa-fw"></i> Historial </a>
      </li>
      </ul>


      <ul class="nav navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="controller/cerrarSesion.php?url=index.php"><i class="fa fa-fw fa-user"></i> Salir</a>
      </li>
       </ul>
</div>
  </div>
</nav>