<?php require 'vista/nav.php';
require 'controller/conexion2.php';


?>


<link rel="stylesheet" type="text/css" href="vista/css/localizacionsuelo.css">

<!-- Registros adicionales generales de cada prueba-->
<div class="container-fluid">

        <div id="cabecera">
        <div class="row">
        <div  class="col-sm-5" id="titulo">
        <h4><i class="fa fa-map-marker" aria-hidden="true"></i>
        Registro de nueva Localización</h4>        </div>
        <!-- ::::::::::::::::::TITULO::::::::::::::::::::::: -->

        </div>

        </div>

<!-- ::::::::::::::::::DATOS ADICIONALES PRUEBA SUELO Y LOCALIZACIÓN::::::::::::::::::::::: -->

  <div class="row">
  <div  class="col-sm-5" id="forlocal">
<button type="button" class="collapsible">Observaciones de registro</button>
<div class="content">
  <p>Los datos registrados en el sieguiente formulario, 
  seran los predeterminados al momento de registrar la prueba, pueden ser usados las veces que sean requeridos.</p>
</div>

        <?php
	      	if(!empty($_GET["id"])){

            $sql2 = "SELECT * FROM localizacion WHERE Id_Prueba = '" . $_GET["id"] . "'";;
            $resultado2 = $conn->query($sql2);
              $ia = 0;
              while ($registro = $resultado2->fetch_assoc()) {
                echo "<form action='controller/editarlocalidad.php' method='post'>";
                echo"<br>";
                echo "<input class='form-control'  type='hidden' name='IdE' value='" . $registro['Id_Prueba'] ."' >";
                echo "<input class='form-control'  type='text' name='ciudadE' value='" . $registro['ciudad'] ."' >";
                echo"<br>";
                echo "<input class='form-control'  type='text' name='coordenadasE' value='" . $registro['coordenadas'] ."' >";
                echo"<br>";
                echo "<input class='form-control'  type='text' name='observacionesE' value='" . $registro['observaciones'] ."' >";

                echo "<br>";
                echo "<input type='submit' class='btn btn-primary' value='Guardar Cambios'>";

                    }}
                    else{
                     echo"<form action='controller/localizacion.php' method='post' class='form-group'>";
                     echo"<br>";

                        echo"<input class='form-control' type='text' name='Ciudad' placeholder='Ciudad' >";
                        echo"<br>";
                        echo"<input class='form-control' type='text' name='Coordenadas'  placeholder='Cooerdenadas' >";
                        echo"<br>";
                        echo"<input class='form-control' type='textArea' name='Observaciones'  placeholder='Observaciones' >";
                        echo"<br>";
                        echo"<button  class='btn btn-outline-secondary'  id='myBtn2'>";
                        echo"<i class='fa fa-database' aria-hidden='true'></i>";
                        echo" Registrar Localización</button> ";
                        echo"<br>";
                         echo"</from>";
                    }

                  ?>
        <br>
        <div id="pagina">
      <a href="suelo.php" class="btn btn-outline-secondary"><i class="fa fa-pagelines fa-3x" aria-hidden="true" ></i>
      Tipo de suelo</a>
      </div>

      </div>

        <div class="col-sm-7">    
        <div class="table2 text-center">
        <table class="table  table-striped table-hover">
        <thead>
        <tr>
        <th >N°</th>
        <th> Localidad </th>
        <th> Coordenadas</th>
        <th> Observaciones</th>
        <th>Editar </th>
        <th>Eliminar </th>


        </tr>      
    </thead>

    <tbody id="tbody">
        <?php

        $sql = "SELECT * FROM localizacion";
        $resultado = $conn->query($sql);
          $ia = 0;
          while ($registro = $resultado->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $registro["Id_Prueba"] . '</td>';
            echo '<td>' . $registro["ciudad"] . '</td>';
            echo '<td>' . $registro["coordenadas"] . '</td>';
            echo '<td>' . $registro["observaciones"] . '</td>';   
            echo '<td>
            <a href="localizacion.php?id='.$registro["Id_Prueba"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>';
            echo '<td>
            <a onclick="javascript: return confirm(\'Desea eliminar el registro actual?\')" href="controller/eliminarlocalidad.php?id='.$registro["Id_Prueba"].'"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>';
            echo '</tr>';
                }
              ?>

              </tbody>
                </table>
                      </div>
        


  

</body>



<script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>
        <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</html>
