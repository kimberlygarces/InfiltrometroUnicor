<!DOCTYPE html>
<html lang="en">
<head>
  <title>Prueba en curso</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/datos.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href=Inicio.php>Infiltrometro</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Salir</a>
      </li>
       </ul>
  </div>
</nav>
<div class="container">
<br>
<div class="container">
<h4>Prueba en curso</h3>
  <p>Datos cacturados</p>   
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#myModal">
    Registrar Prueba
  </button>
  <button onclick="location='controller/historial.php'" type="button" class="btn btn-danger">
  Finalizar Prueba
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Registro Prueba</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

        
        <form action="controller/localizacion.php" method="post" class="form-group">
        <div class="row">
       <div class="col">
             <h4>Localización</h4>
            <label>Ciudad</label>
            <input class="form-control" type="text" name="Ciudad">
            <label>Coordenadas</label>
            <input class="form-control" type="text" name="Coordenadas">
            <label>Observaciones</label>
            <input class="form-control" type="textArea" name="Observaciones">
              <br>
                </div>
        <div class="col">
            <h4>Suelo</h4>
            <label>TipoSuelo</label>            
            <input class="form-control" type="text" name="TipoSuelo">
            <label>Observaciones</label>
            <input class="form-control" type="text" name="Observaciones2">
              <br>
              </div>
        </div>
               
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">

        <?php
           //Conectarse al servidor mysql
         $conexion = mysqli_connect("localhost","root","","infiltrometro") or die("ERROR: ".mysqli_error($conexion));
           
         $sql = "SELECT * FROM datosprueba where N_Dato=1" ;
           //EJECUTAR LA CONSULTA
         $resultado = mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));
         if(empty($resultado)){
           echo '<tr><td colspan="4"></td></tr>';
         }
         else{
           $i=0;
         while($registro = mysqli_fetch_array($resultado)){
         
             
            echo"<button onclick=location='localizacion.php?Id=$registro[Id_Prueba]' class='btn btn-primary'>".'AGREGAR'."</button>";


        
               
         }
       }
       ?>
   
      <!--  <input type="submit" class="btn btn-primary" value="Agregar">     -->
          </from>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

        </div>
        
      </div>
    </div>
  </div>
  
</div>
  <br>
  <div class="row">
       <div class="col-sm-7">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>N°</th>
        <th>Tiempo</th>
        <th>Distancia</th>
      </tr>
    </thead>
    <tbody id="tbody">
          <!-- DATOS EN TIEMPO REAL-->
    </tbody>
  </table>
  </div>
  <div class="col-sm-3">

  <h1>que onda</h1>

  </div>
    </div>
  </div>
</div>

</body>

<script>

  $(document).ready(function(){
    //Cada 10 segundos (10000 milisegundos) se ejecutará la función refrescar
    setTimeout(refrescar, 60000);
  });
  function refrescar(){
    //Actualiza la página
    location.reload();
  }
</script>
</html>
