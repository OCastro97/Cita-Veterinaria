<?php 
require('../../php/conexionBD.php');

//$_GET recibe enlaces
$id = $_GET["id"];

//recibimos los datos de la Base de Datos
$contacto = "SELECT * FROM contacto WHERE id_contact = '$id'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar mensaje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
<body>

    <div class="container">
        <h1 class="text-center">Respuestas de Mensajes</h1>
        <hr>
        <form action="../../php/MSresponder.php" method="POST">
            <?php 
                $mostrar = mysqli_query($conexion, $contacto); 
                $fila = mysqli_fetch_assoc($mostrar)
            ?>
            <div class="mb-3">
                <input type="hidden" value="<?php echo $fila["id_contact"];?>" name="id">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" value="<?php echo $fila['nombre_contac'] ?>"  class="form-control" name="nombre" id="nombre" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="<?php echo $fila['correo_contac'] ?>" class="form-control" id="email" name="email" placeholder="correo@example.com" required>
              </div>
              <?php mysqli_free_result($mostrar)?>
              <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="acepto" required>
                <label class="form-check-label" for="acepto" >Acepto la politica de privacidad</label>
              </div>
              <div class="d-grid gap-2 col-6 mx-auto">
                <div class="row">
                  <div class="d-grid gap-2 col mx-auto">
                    <a href="./mensajes.php" class="btn btn-outline-primary" style="text-decoration: none;">Volver</a>

                  </div>
                  <div class="d-grid gap-2 col mx-auto">
                    <button type="submit" class="btn btn-outline-primary" name="enviar">Enviar</button>
                  </div>
                </div>
              </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>