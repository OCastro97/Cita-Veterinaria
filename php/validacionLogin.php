<?php
require('conexionBD.php');

$user = $_POST['nombre'];
$clave =$_POST['password'];

//variable global
session_start();
ob_start();
$_SESSION['indice'] = $user;

//Consultas a la BBDD
$consultaAdmin="SELECT * FROM administrador WHERE nombre_admin='$user' and pass_admin='$clave' ";
$consultaUser="SELECT * FROM usuario WHERE email='$user' and pass='$clave' ";

$respuestaUser=mysqli_query($conexion, $consultaUser);
$respuestaAdmin=mysqli_query($conexion, $consultaAdmin);

$buscarUser=mysqli_fetch_array($respuestaUser);
$buscarAdmin=mysqli_fetch_array($respuestaAdmin);

if( $buscarUser['id_rol'] == 2){
    header("location:../pages/usuarios/informacion.php");} ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/log/loading.css">
</head>
<body>
     <div class="cargar">
        <div class="loader"></div>
        <div class="loader"></div>
        <div class="loader"></div>
    </div>
</body>
</html>
   
<?php 
if( $buscarAdmin['id_rol'] == 1){
    header("location:../pages/doctor/pacientes.php");
}
else{
    echo'<script>
            alert("Contraseña o Usuario incorrecta"); 
            window.history.go(-1);  
        </script>';
        }

//Desconectar Base de Datos
mysqli_close($conexion);
?>