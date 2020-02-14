
<!-- <link rel="stylesheet" type="text/css" href="vista/css/historial.css"> -->
<link rel="stylesheet" type="text/css" href="vista/css/prueba.css">

<?php
if (!isset($_GET['Id'])) {
  header('location:historial.php');
}
require 'vista/nav.php';
require 'controller/conexion2.php';
?>

<div class="container">
 <h1 >Informe general</h1> 
 
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
      <button  class="btn btn-success" onclick="myFunction()" id="myBtn">
      <i class="fa fa-map-marker" aria-hidden="true"></i>
      ver localización... </button>

      <div id="more2">
      <h4>Suelo</h4>
            <label>TipoSuelo</label>            
            <input class="form-control" type="text" name="TipoSuelo">
            <label>Observaciones</label>
            <input class="form-control" type="text" name="Observaciones">
            <br>

      </div>
      </p>
      <button  class="btn btn-success" onclick="myFunction2()" id="myBtn2">
      <i class="fa fa-circle" aria-hidden="true"></i>
      ver suelo...</button>

        <form action="controller/localizacion.php" method="post" class="form-group">
        </form>
      
      </div>
<br>
      <div class="detalle">
      <a href="controller/printPDF.php?prueba=<?php echo $_GET['Id']; ?>" target="_blank">
    <button id="btonDoc" type="button" class="btn btn-danger">
      <i data-toggle="tooltip" title="Generar documento PDF"class="fa fa-file-pdf-o fa-2x"> </i>
      </button></a>
       <a href="controller/printPDF.php?prueba=<?php echo $_GET['Id']; ?>" target="_blank">
    <button id="btonDoc" type="button" class="btn btn-success">
    <i data-toggle="tooltip" title="Generar archivo ecxel"class="fa fa-file-excel-o fa-2x" ></i>
      </button></a>
      <a href=" controller/printPDF.php?prueba=<?php echo $_GET['Id']; ?>" target="_blank">
    <button id="btonDoc" type="button" class="btn btn-warning">
    <i data-toggle="tooltip" title="Generar grafica de datos" class="fa fa-line-chart fa-2x" ></i>
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
  var btnText2 = document.getElementById("myBtn2");



  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Localización"; 
    moreText.style.display = "none";
    btnText2.style.display = "inline";

  } else {
    dots.style.display = "none";
    btnText2.style.display = "none";
    btnText.innerHTML = "cerrar"; 
    moreText.style.display = "inline";
  }

}
  function myFunction2() {
    var dots = document.getElementById("dots");
  var moreText = document.getElementById("more2");
  var btnText = document.getElementById("myBtn2");
  var btnText2 = document.getElementById("myBtn");


  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Tipo de suelo"; 
    moreText.style.display = "none";
    btnText2.style.display = "inline";

  } else {
    dots.style.display = "none";
    btnText.innerHTML = "cerrar"; 
    moreText.style.display = "inline";
    btnText2.style.display = "none";

  }

  
}
</script>
  </body>

  </html>