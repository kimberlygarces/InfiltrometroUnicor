<?php

function conectar()
{
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'infiltrometro';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Revisar que onda: ' . $e->getMessage());
}
}




