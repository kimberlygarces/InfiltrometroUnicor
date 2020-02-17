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


nav{
  width: 100%;
  background-color: #EDBB99;
  overflow: auto;
  border-radius: 3px;
}

.navbar a {
  color: #f2f2f2;
  text-align: center;
  padding: 5px 5px;
  text-decoration: none;
  font-size: 20px;
}

.navbar a:hover {
  background-color: #1CE32B;
  padding: 5px 5px;
  border-radius: 5px;

  
}

.navbar-brand {
  background-color: #41F308;
  border-radius: 10px;
  padding: 10px;
  width: 150px;
  
}


@media screen and (max-width: 50px) {
  .navbar a {
    float: none;
    display: block;
  }
}
#admin{
  background-color: #41F308;
  border-radius: 10px;
  padding: 1px;
  width: 60px; 
}
</style>

</head>
<body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href=inicio.php><i class="fa fa-home fa-fw fa-lg"></i><b>Inficor  </b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <!-- <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li> -->
        
      </ul>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="registro.php"> <i class="fa fa-user-plus" aria-hidden="true"></i>
        registrarse</a>
        </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#myModal" href="controller/cerrarSesion.php?url=index.php">
        <i class="fa fa-fw fa-user"></i> Ingresar</a>
      </li>
 
      <!-- Posible mente agregar a pagina principal, ingreso directo a admin -->
      <!-- <li class="nav-item" id="admin">
      <a class="nav-link" href="Admin.php"> 
      <i class="fa fa-lock" aria-hidden="true"></i>
        <i class="fa fa-user-secret" aria-hidden="true"></i>
        </a>
      </li> -->

      


       </ul>
    </div>
  </nav>
</header>
