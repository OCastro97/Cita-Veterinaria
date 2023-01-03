<html>
    <head>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
</html>

<?php
require('../../php/conexionBD.php');
require('../../php/variablesGlobales.php');

$id = $_POST['id'];

$actualizar = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', telefono='$telefono', email='$email', mascotaNombre='$nombreMascota', especie='$especie', raza='$raza', size='$size', fechaNacimiento='$fechaNacimiento', sexo='$sexo', vacuna='$vacuna', color='$color' WHERE id_user='$id'";

function actualizacion($conexion, $actualizar){
    $resultado = mysqli_query($conexion, $actualizar);
    if($resultado){
        echo '<script> 
                    swal("Ese Actualizo correctamente");
                    window.location="./informacion.php";
              </script>';
    }else{
        echo '<script> 
                    swal("No se Actualizo correctamente"); 
                    window.history.go(-1);
              </script>';
    }
}//fin de la funcion 


actualizacion($conexion, $actualizar);
?>