<?php
require_once "prueba.php";
//1.contectarse al servidor mysql
require 'conexion2.php';

		$conexion = mysqli_connect($server, $username, $password, $database) or die("ERROR 1: ".mysqli_error());
		mysqli_select_db($conexion,"infiltrometro") or die("Error conectandose a la BD ");

        class Data{
            private $con;
            public function __construct(){
                require 'conexion2.php';
                $conexion = mysqli_connect($server, $username, $password, $database) or die("ERROR 2: ".mysqli_error($conexion));
            }
            public function getPrueba(){
    
                $prueba = array();
                require 'conexion2.php';
                $conexion = mysqli_connect($server, $username, $password, $database) or die("ERROR 3: ".mysqli_error($conexion));
                $sql = "SELECT * FROM datosprueba";
                //EJECUTAR LA CONSULTA
                require 'conexion2.php';

              $res = mysqli_query($conexion, $sql) or die("ERROR 4: ".mysqli_error($conexion));
                while($reg = mysqli_fetch_array($res)){
                    $p = new datosprueba();
                    $p->N_Dato = $reg[0];
                
                    $p->Id_dispocitivo = $reg[1];
                    $p->Id_Prueba = $reg[2];
                    $p->tiempo = $reg[3];
                    $p->distancia = $reg[4];
              
                    array_push($prueba, $p);
                }
                return $prueba;
            }
        }
?>