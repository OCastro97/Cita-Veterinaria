<?php

require('conexionBD.php');

$email = $_POST['email'];
$passverficar1 = $_POST['passverficar1'];
$passverficar2 = $_POST['passverficar2'];

$verificar = mysqli_query($conexion ,"SELECT * FROM usuario WHERE email = '$email' ");

if (mysqli_num_rows($verificar) > 0) {
    if ($passverficar1 == $passverficar2) {
        $actulizar = "UPDATE usuario SET pass=$passverficar2 WHERE email='$email' ";
        $enviar = mysqli_query($conexion, $actulizar);
        if (!$enviar) {
            echo '<script> 
                    alert("Error al cambiar la contraseña");
                    window.history.go(-1);
                 </script>';           
        } else{
            echo '<script> 
                    alert("Contraseña Cambiado correctamente");
                  </script>';
                  header("location:../logReg/login.html");
        }
        mysqli_close($conexion);
    }else {
        echo '<script> 
                alert("La contraseña introducido no es igual");
                window.history.go(-1);
            </script>';
    }
} else {
    echo '<script> 
            alert("No esta registrado");
            window.history.go(-1);
        </script>';
}

mysqli_close($conexion);

?>