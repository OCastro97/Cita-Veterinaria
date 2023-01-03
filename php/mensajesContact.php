<?php
require('conexionBD.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$enviar = "INSERT INTO contacto (nombre_contac, correo_contac, telefono_contac, mensaje) 
            VALUES ('$nombre', '$email','$telefono', '$mensaje')";


$verificacion = mysqli_query($conexion, $enviar);
if (!$verificacion) {
    echo '<script> 
            alert("Error al enviar el mensaje");
            window.history.go(-1);
        </script>';
} else {
        echo '<script> 
                alert("Su mensaje fue enviado exitosamente");
                window.history.go(-1);
             </script>';
}

mysqli_close($conexion);
?>