<?php
require('../../php/conexionBD.php');

$id = $_GET['id'];
$estado = 'Atendido';

$actualizar = "UPDATE cita SET estado='$estado' WHERE id_cita='$id'";


function actualizacion($conexion, $actualizar){
    $resultado = mysqli_query($conexion, $actualizar);
    if($resultado){
        echo '<script> 
                    window.location="./agenda.php";
              </script>';
    }else{
        echo '<script> 
                alert("No se Actualizo correctamente"); 
                    window.history.go(-1);
              </script>';
    }
}//fin de la funcion 


actualizacion($conexion, $actualizar);


?>