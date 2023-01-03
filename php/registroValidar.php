<?php
require('conexionBD.php');
require('variablesGlobales.php');

//Insertar Datos a la Base de Datos
$insertar = "INSERT INTO usuario (nombre, apellido, telefono, email, pass, mascotaNombre, especie, raza, size, fechaNacimiento, sexo, vacuna, color) 
             VALUES ('$nombre', '$apellido', '$telefono', '$email', '$password', '$nombreMascota', '$especie', '$raza', '$size', '$fechaNacimiento', '$sexo', '$vacuna', '$color')";


//Funcion para verificar proceso de registro en BD
function verificar($conexion, $email, $insertar){
    $verificarCuenta = mysqli_query($conexion, "SELECT * FROM usuario WHERE email ='$email'");
        if(mysqli_num_rows($verificarCuenta) > 0){//verfica la cantidad de usuarios en la tabla
            echo'<script> 
                    alert("Ya hay un registro similar");
                    window.history.go(-1);
                </script>';
            exit;
        }

    $resultado = mysqli_query($conexion, $insertar);
        if (!$resultado){
            echo '<script> 
                    alert("Error al Registrar");
                    window.history.go(-1);
                </script>';
        }else{
            header("location:../logReg/login.html");
        }

   mysqli_close($conexion); /*Cerrar conexion BD*/
}//fin de la funcion

verificar($conexion, $email, $insertar); //ejecutamos la funcion

?>