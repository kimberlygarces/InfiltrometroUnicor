<STYLE>
.detalle{
  /* background-color: #1CE32B; */
    padding: 16px 16px;
    cursor: pointer;
    outline: none;
    /* color: #fff; */
    border: none;
    border-radius: 10px;
    border-style: outset;
    border-color: #1CE32B;
    /* box-shadow: 0 9px #999; */
}

#prueba{
  border: none;
  cursor: pointer;
  width:650px;
  outline: none;
  margin-left: 29px;
  margin-bottom: 1px;

}

.table2{
  cursor: pointer;
   overflow:scroll;
     height:400px;
     width:700px;
     border-style: outset;
    border-color: #1CE32B;
    border-radius: 10px;

}

table{
  width:600px;


}
th{
    border-bottom: 1px solid #c4c0c9;
    border-right: 1px solid #c4c0c9;

}
td{
    border-right: 1px solid #c4c0c9;

}

#more {display: none;}
#more2 {display: none;}

#myBtn, #myBtn2{
  width:300px;


}
 
</STYLE>

<link rel="stylesheet" type="text/css" href="vista/css/historial.css">

<?php
if (!isset($_GET['Id'])) {
  header('location:historial.php');
}
require 'vista/nav.php';
require 'controller/conexion2.php';
?>

<div class="container">
<h1 class='animated bounce delay-20s'>Datos prueba</h1>

  <div id="Mostrar" class="row align-items-start">
  <div class="col-sm-12 col-lg-4">
    <br>

    <div class="detalle text-center">
      <p> 
     <h4 id="dots">Datos adicionales de prueba de infiltración</h4>

      <div id="more">
      <h4>Localización</h4>

      <label>Ciudad</label>
            <input class="form-control" type="text" name="Ciudad">
            <label>Coordenadas</label>
            <input class="form-control" type="text" name="Coordenadas">
            <label>Observaciones</label>
            <input class="form-control" type="textArea" name="Observaciones">

      </div>
      </p>
      <button  class="btn btn-success" onclick="myFunction()" id="myBtn">ver localización... </button>

      <div id="more2">
      <h4>Suelo</h4>
            <label>TipoSuelo</label>            
            <input class="form-control" type="text" name="TipoSuelo">
            <label>Observaciones</label>
            <input class="form-control" type="text" name="Observaciones">
            <br>

      </div>
      </p>
      <button  class="btn btn-success" onclick="myFunction2()" id="myBtn2">ver suelo...</button>

        <form action="controller/localizacion.php" method="post" class="form-group">
        </form>

        <a href="controller/printPDF.php?prueba=<?php echo $_GET['Id']; ?>" target="_blank">
    <button type="button" class="btn btn-danger">
      <i class="fa fa-file-pdf-o fa-2x"> Descargar</i>
      </button></a>
      
      </div>
      
      
      </div>
    <div class="col-sm-12 col-lg-8">
    <br>

    <!-- <table class="table table-striped  text-center">

      <thead>
          <th data-toggle="tooltip" title="Número de dato">N° Dato</th>
          <th data-toggle="tooltip" title="Tiempo acumulado"> Tiempo </th>
          <th data-toggle="tooltip" title="Lectura en escala"> l Escala </th>
          <th data-toggle="tooltip" title="Infiltración parcial"> I Parcial (mm) </th>
          <th data-toggle="tooltip" title="Infiltración acumulada"> IA (mm) </th>
        
        </thead>
      </table> -->
    <div class="table-responsive">
        <div class="table2" >

      <table class="table table-striped  text-center">
      <thead>
          <!-- <th>PRUEBA</th> -->
          <th data-toggle="tooltip" title="Número de dato">N° Dato</th>
          <th data-toggle="tooltip" title="Tiempo acumulado"> Tiempo </th>
          <th data-toggle="tooltip" title="Lectura en escala"> l Escala </th>
          <th data-toggle="tooltip" title="Infiltración parcial"> I Parcial (mm) </th>
          <th data-toggle="tooltip" title="Infiltración acumulada"> IA (mm) </th>
        
        </thead>
        <tbody >
       
          <?php
          if (!empty($_GET["Id"])) {
            //1.contectarse al servidor mysql 
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            //2.prepara una consulta sql
            $sql = "SELECT * FROM historialdatos WHERE Id_Prueba = '" . $_GET["Id"] . "'";
            //3.ejecutar la consulta
            $resultado = $conn->query($sql);
            echo '<tr><td colspan="5"></td></tr>';
            $aux = null;
            $ia = 0;
            while ($registro = $resultado->fetch_assoc()) {
              echo '<tr>';
              // echo '<td>' . $registro["Id_Prueba"] . '</td>';
              echo '<td data-toggle="tooltip" title="Número de dato">' . $registro["N_Dato"] . '</td>';
              echo '<td data-toggle="tooltip" title="Tiempo acumulado">' . $registro["tiempo"] . '</td>';
              echo '<td data-toggle="tooltip" title="Lectura en escala">' . $registro["distancia"] . '</td>';

              if ($aux == null) {
                echo '<td>-</td>';
              } else {
                echo '<td data-toggle="tooltip" title="Infiltración parcial">' . (($registro['distancia'] - $aux) * 10) . '</td>';
              }
              if ($aux == null) {
                echo '<td>-</td>';
              } else {
                $ia = $ia + ($registro['distancia'] - $aux);
                echo '<td data-toggle="tooltip" title="Infiltración acumulada">' . ($ia * 10) . '</td>';
              }
              $aux = $registro['distancia'];

              echo '</tr>';
            }
          }
          $conn->close();
          ?>
        </tbody>
      </table>
      </div>
    </div>
    </div>
    
  </div>
   <footer class="page-footer font-small unique-color-dark pt-4">

          <div class="footer-copyright text-center py-3">© 2019: Ingenieria de Sistemas
            <a href="https://mdbootstrap.com/education/bootstrap/"> InfiltrometroUnicor</a>
          </div>
          <!-- Copyright -->

        </footer>

        <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");


  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "ver localización..."; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "cerrar"; 
    moreText.style.display = "inline";
  }

}
  function myFunction2() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more2");
  var btnText = document.getElementById("myBtn2");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "ver suelo..."; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "cerrar"; 
    moreText.style.display = "inline";
  }

  
}
</script>
  </body>

  </html>