<?php 
//Datos de la BBDD
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "veterinaria";

$conexion = mysqli_connect($host, $user, $pass, $dbname);

mysqli_set_charset($conexion, "utf8"); //para cargar los caracteres correctamente.

?>