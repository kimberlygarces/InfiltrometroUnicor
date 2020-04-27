<?php require 'vista/nav.php';
require 'controller/conexion2.php';


?>


<link rel="stylesheet" type="text/css" href="vista/css/localizacionsuelo.css">

<!-- Registros adicionales generales de cada prueba-->
<div class="container-fluid">

        <div id="cabecera">
        <div class="row">
        <div  class="col-sm-5" id="titulo">
        <h4><i class="fa fa-pagelines fa-2x" aria-hidden="true"></i>
        Registro de nuevo tipo de suelo</h4>        </div>
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

            $sql2 = "SELECT * FROM suelo WHERE Id_Prueba = '" . $_GET["id"] . "'";;
            $resultado2 = $conn->query($sql2);
              $ia = 0;
              while ($registro = $resultado2->fetch_assoc()) {
                echo "<form action='controller/editarsuelo.php' method='post'>";
                echo"<br>";

                echo "<input class='form-control'  type='hidden' name='IdE' value='" . $registro['Id_Prueba'] ."' >";

                echo "<input class='form-control'  type='text' name='TipoSueloE' value='" . $registro['TipoSuelo'] ."' >";
                echo"<br>";
                echo "<input class='form-control'  type='text' name='ObservacionesE' value='" . $registro['Observaciones'] ."' >";

                echo "<br>";
                echo "<input type='submit' class='btn btn-primary' value='Guardar Cambios'>";

                    }}
                    else{
                     echo"<form action='controller/suelo.php' method='post' class='form-group'>";
                     echo"<br>";

                        echo"<input class='form-control' type='text' name='TipoSuelo' placeholder='Tipo de suelo' >";
                        echo"<br>";
                
                        echo"<input class='form-control' type='textArea' name='Observaciones'  placeholder='Observaciones' >";
                        echo"<br>";
                        echo"<button  class='btn btn-outline-secondary'  id='myBtn2'>";
                        echo"<i class='fa fa-database' aria-hidden='true'></i>";
                        echo" Registrar suelo</button> ";
                         echo"</from>";
                         echo"<br>";

                    }
                  ?>

      <br>
      <div id="pagina">
      <a href="localizacion.php"  class="btn btn-outline-secondary"><i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
      Localización</a>
      </div>
      </div>

        <div class="col-sm-7">    
        <div class="table2 text-center">
        <table class="table  table-striped table-hover">
        <thead>
        <tr>
        <th >N°</th>
        <th> Tipo de suelo </th>
        <th> Observaciones</th>
        <th>Editar </th>
        <th>Eliminar </th>


        </tr>      
    </thead>

    <tbody id="tbody">
        <?php

        $sql = "SELECT * FROM suelo";
        $resultado = $conn->query($sql);
          $ia = 0;
          while ($registro = $resultado->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $registro["Id_Prueba"] . '</td>';
            echo '<td>' . $registro["TipoSuelo"] . '</td>';
            echo '<td>' . $registro["Observaciones"] . '</td>';   
            echo '<td>
            <a href="suelo.php?id='.$registro["Id_Prueba"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>';
            echo '<td>
            <a onclick="javascript: return confirm(\'Desea eliminar el registro actual?\')" href="controller/eliminarsuelo.php?id='.$registro["Id_Prueba"].'"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
