
<?php 
if(!isset($_GET['Id'])){
  header('location:historial.php');
}
require 'vista/nav.php';
require 'controller/conexion2.php';
?>

<div class="container">
  <div id="Mostrar" class="row align-items-start">
    <div class="col-sm-12 col-lg-6">
      <h1>Datos prueba</h1>
      <a href="controller/printPDF.php?prueba=<?php echo $_GET['Id']; ?>" target="_blank"><button type="button" class="btn btn-outline-dark">
        Descargar .PDF
      </button></a>
      <table class="table table-striped">
        <thead>
          <th>PRUEBA</th>
          <th>N_DATO</th>
          <th> TIEMPO </th>
          <th> DISTANCIA </th>
        </thead>

        <tbody id="myTable">
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
            echo '<tr><td colspan="4"></td></tr>';
            while ($registro = $resultado->fetch_assoc()) {
              echo '<tr>';
              echo '<td>' . $registro["Id_Prueba"] . '</td>';
              echo '<td>' . $registro["N_Dato"] . '</td>';
              echo '<td>' . $registro["tiempo"] . '</td>';
              echo '<td>' . $registro["distancia"] . '</td>';
              echo '</tr>';
            }
          }
          $conn->close();
          ?>
        </tbody>
      </table>
    </div>
  </div>
  </body>

  </html>