<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/datos.js"></script>
</head>
<body>

    <div class="container">

  
      <div id="Mostrar"class="row align-items-start">

      <div class="col-sm-12 col-lg-6">
        <h1>Datos prueba</h1>
     
      <table class="table table-striped">

      <thead>
      <th>PRUEBA</th>
          <th>N_DATO</th>
          <th> TIEMPO </th>
          <th> DISTANCIA </th>
          </thead>
          
      <tbody id="myTable">

      <?php
          if(!empty($_GET["Id"])){
          //1.contectarse al servidor mysql
          $conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
          mysqli_select_db($conexion,"infiltrometro") or die("Error conectandose a la BD ");
          //2.prepara una consulta sql
          $sql = "SELECT * FROM historialdatos WHERE Id_Prueba = ".$_GET["Id"];
          //3.ejecutar la consulta

          $resultado = mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));
          if(empty($resultado)){
            echo '<tr><td colspan="4"></td></tr>';
          }
          else{
            $i=0;
          while($registro = mysqli_fetch_array($resultado)){
            echo '<tr>';
            echo '<td>'.$registro["Id_Prueba"].'</td>';
            echo '<td>'.$registro["N_Dato"].'</td>';
            echo '<td>'.$registro["tiempo"].'</td>';
            echo '<td>'.$registro["distancia"].'</td>';
            echo '</tr>';
                
          }
        }
    
        }

        
          ?>


           
      

        </tbody>
        </table>


        </div>
        </div>
      </body>
      </html>