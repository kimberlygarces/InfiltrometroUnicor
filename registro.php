<!DOCTYPE html>
<html lang="en">

<head>
  <title> Infiltrometro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <!--Animacion-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

  <link rel="stylesheet" href="css/Inicio.css">

  <!-- API scanner QR -->
  <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<!-- Link iconos -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
  <div class="jumbotron text-center">
    <h1>Infiltrometro</h1>
    </div>

  <div class="container text-center">
    <img class="animated bounceInLeft delay-20s" src="img/user.png">

    <form action="controller/registroUser.php" method="post" class="form-group">
      <div class="row">
        <div class="col-sm-6">
          <br>
          <input type="text" name="Id_Usuario" class="form-control" placeholder="Identificación" required autofocus>
          <br>
          <input type="text" name="Nombre_Usuario" class="form-control" placeholder="Nombre de Usuario" required autofocus>
          <br>
          <input type="username" name="Correo" class="form-control" placeholder="Correo" required autofocus>
          <br>
          </div>
            <div class="col-sm-6">
          <br>
          <input type="password" name="Contraseña" class="form-control" placeholder="Contraseña" required>
          <br>
          <input type="password" name="cPassword" class="form-control" placeholder="Verifique Contraseña" required>
          <br>
            <div class="form-group row">
            <div class="col-sm-9">
            <input type="text" name="Id_Dispocitivo" id="id_dispositivo" class="form-control" placeholder="Código dispositivo" required autofocus>
                </div>
                <br>
              <div class="col-sm-2">
                
            
          <div class="container">
            <!-- Button to Open the Modal -->
          
            <button style="" id="activarCamQr" name="activarQr" class="btn btn-default animated infinite tada delay-2s" class="" value="Ingresar QR" onclick="activarCamara()"title="Scanear QR" data-toggle="modal" data-target="#myModal">
              <i class="material-icons" style="font-size:39px">crop_free</i>
            </button>   
                  

            <!-- The Modal -->
            <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Scaner QR</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
    <div class="panelCamara" id="panelCamaraId">
          <video id="preview"></video>
        </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

         
          </div>
      </div>
      </div>
      <button class="btn btn-lg btn-secondary btn-block" type="submit">Registrar Usuario</button>
    </form>
        </div>
      <script>
          function activarCamara() {
            
            // document.getElementById('panelCamaraId').append;
            // }

      let scanner = new Instascan.Scanner({
        video: document.getElementById('preview')
      });
      scanner.addListener('scan', function(content) {
        console.log(content);
        document.getElementById("id_dispositivo").value = content;
        scanner.stop();
      });
      Instascan.Camera.getCameras().then(function(cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function(e) {
        console.error(e);
      });
    }
  </script>


  <footer class="page-footer font-small unique-color-dark pt-4">

    <div class="container">

      <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
          <h5 class="mb-1">Ya se encuentra registrado</h5>
        </li>
        <li class="list-inline-item">
          <button onclick="location='index.php'" type="button" class="btn btn-outline-dark">Iniciar secion</button>
        </li>
      </ul>

    </div>

    <div class="footer-copyright text-center py-3">© 2019: Ingenieria de Sistemas
      <a href="https://mdbootstrap.com/education/bootstrap/"> InfiltrometroUnicor</a>
    </div>

  </footer>
  <!-- Footer -->

</body>

</html>