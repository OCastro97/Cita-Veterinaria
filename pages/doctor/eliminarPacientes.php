<?php
require('../../php/conexionBD.php');

$id = $_GET['id'];

$eliminar = "DELETE FROM usuario WHERE id_user ='$id'";

function borrar($conexion, $eliminar){
    $resultado = mysqli_query($conexion, $eliminar);
    if ($resultado) {
        header("Location:./pacientes.php");
    } else {
        echo '<script> 
                    alert("No se Elimino Registro"); 
                    window.history.go(-1);
             </script>';
    }
}//fin de la funcion

borrar($conexion, $eliminar);

?>