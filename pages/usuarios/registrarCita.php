<?php 
    require('../../php/conexionBD.php');

    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $mascota = $_POST['mascota'];
    $especie = $_POST['especie'];
    $raza = $_POST['raza'];
    $sexo = $_POST['sexo'];
    $vacuna = $_POST['vacuna'];
    $fechaCita = $_POST['fechaCita'];
    $horaCita = $_POST['horaCita'];
    $servicios = strtolower($_POST['servicios']);
    $observacion = $_POST['observacion'];


    $consultar = "SELECT * FROM cita WHERE fechaCita='$fechaCita' AND horaCita='$horaCita' ";

    $respuesta = mysqli_query($conexion, $consultar);
    $verificar = mysqli_fetch_array($respuesta);

    if ($verificar['fechaCita'] == $fechaCita || $verificar['fechaCita'] !== "" ) {
        if ($verificar['horaCita'] == $horaCita) {
            echo '<script> 
                alert("Horario no disponible");
                window.history.go(-1);
            </script>';
        }else{
            $insertar = "INSERT INTO cita (email_fk, nombre, mascotaNombre, especie, raza, sexo, vacuna, fechaCita, horaCita, servicios, observacion) 
            VALUES ('$email', '$nombre', '$mascota', '$especie', '$raza', '$sexo', '$vacuna', '$fechaCita', '$horaCita', '$servicios', '$observacion' )";
            
            $resp = mysqli_query($conexion, $insertar);

            echo '<script> 
                alert("Registro de cita existosa");
                window.location="./citas.php";
            </script>';
        }
    }

    mysqli_close($conexion);
?>