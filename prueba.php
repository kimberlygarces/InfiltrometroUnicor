<?php require 'vista/nav.php' ?>



<div class="container">
  <div id="Mostrar" class="row align-items-start">
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
          if (!empty($_GET["Id"])) {
            //1.contectarse al servidor mysql
            // $conexion = mysqli_connect("localhost", "root", "") or die("ERROR: " . mysqli_error());
            // mysqli_select_db($conexion, "infiltrometro") or die("Error conectandose a la BD ");
            //2.prepara una consulta sql
            require 'controller/conexion2.php';
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "SELECT * FROM historialdatos WHERE Id_Prueba = '" . $_GET["Id"]."'";
            //3.ejecutar la consulta
            $resultado = $conn->query($sql);
            // $resultado = $resultado->fetch_();
            // $resultado = mysqli_query($conexion, $sql) or die("ERROR: " . mysqli_error($conexion));
            // if (empty($resultado)) {
              echo '<tr><td colspan="4"></td></tr>';
            // } else {
            //   $i = 0;
              while ($registro = $resultado->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $registro["Id_Prueba"] . '</td>';
                echo '<td>' . $registro["N_Dato"] . '</td>';
                echo '<td>' . $registro["tiempo"] . '</td>';
                echo '<td>' . $registro["distancia"] . '</td>';
                echo '</tr>';
              // }
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