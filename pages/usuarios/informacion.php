
<?php
    include "./header.php";
    require('../../php/conexionBD.php');

    //variable global
    session_start();
    ob_start();
    $indice = $_SESSION['indice'];

    $usuarioBD = "SELECT * FROM usuario WHERE email = '$indice'";
    $mostrar = mysqli_query($conexion, $usuarioBD); 
    $fila = mysqli_fetch_assoc($mostrar)
?>

<!-- CONTENT -->
<section id="contentInfo">
		<!-- NAVBAR -->
		<nav>
            <div class="navbar">

                <i class="fas fa-bars"></i>
                <div class="user">

                    <a href="#" class="notification">
                        <i class="fas fa-bell"></i>
                        <span class="num">8</span>
                    </a>
                    <a href="#" class="profile">
                        <span class="name"><?php echo $indice; ?></span>
                        <img src="../../img/perfil.jpg">
                    </a>
                </div>
            </div>
		</nav>
		<!-- NAVBAR -->

<main>

<div class="content-data-info">

<div class="contenedor-info">
  <!-- Cambio de la contraseña y actualizacion de datos del usuario -->
      <header>Mi Información</header>
  
          <form action="./actualizarInformacion.php" method="POST">

              <div class="form first-info">
                  <div class="detalles personales">
                      <span class="title">Detalles del Usuario</span>

                      <div class="field-info">

                            <input type="hidden" value="<?php echo $fila["id_user"];?>" name="id">

                          <div class="input-field-info">
                              <label for="">Nombre</label>
                              <input type="text" name="nombre" value="<?php echo $fila['nombre'] ?>"require>
                          </div>

                          <div class="input-field-info">
                              <label for="">Apellido</label>
                              <input type="text" name="apellido" value="<?php echo $fila['apellido'] ?>"require>
                          </div>

                          <div class="input-field-info">
                              <label for="">Teléfono</label>
                              <input type="text" name="telefono" value="<?php echo $fila['telefono'] ?>"require>
                          </div>

                          <div class="input-field-info">
                              <label for="">Correo Electrónico</label>
                              <input type="email" name="email" value="<?php echo $fila['email'] ?>"require>
                          </div>
                        </div>
                  </div>

                  <div class="detalles personales">
                      <span class="title">Detalles de la Mascota</span>

                      <div class="field-info">
                          <div class="input-field-info">
                              <label for="">Nombre</label>
                              <input type="text" name="nombreMascota" value="<?php echo $fila['mascotaNombre'] ?>" require>
                          </div>

                          <div class="input-field-info">
                              <label for="">Especie</label>
                              <input type="text" name="especie" value="<?php echo $fila['especie'] ?>" require>
                          </div>

                          <div class="input-field-info">
                              <label for="">Raza</label>
                              <input type="text" name="raza" value="<?php echo $fila['raza'] ?>" require>
                          </div>

                          <div class="input-field-info">
                              <label for="">Fecha de Nacimiento</label>
                              <input type="text" name="fechaNacimiento" value="<?php echo $fila['fechaNacimiento'] ?>" require>
                          </div>

                          <div class="input-field-info">
                              <label for="">Sexo</label>
                              <input type="text" name="sexo"  value="<?php echo $fila['sexo'] ?>" require>
                          </div>
                          
                          <div class="input-field-info">
                              <label for="">Tamaño</label>
                              <input type="text" name="size" value="<?php echo $fila['size'] ?>" require>
                          </div>
                          <div class="input-field-info">
                              <label for="">Vacuna</label>
                              <input type="text" name="vacuna" value="<?php echo $fila['vacuna'] ?>" require>
                          </div>
                          <div class="input-field-info">
                              <label for="">Color</label>
                              <input type="text" name="color" value="<?php echo $fila['color'] ?>" require>
                          </div>
                      </div>

                      <?php mysqli_free_result($mostrar)?>

                      <button class="submit">
                              <span class="submit">Actualizar</span>
                              <i class="far fa-arrow-alt-right"></i>
                          </button>
                  </div>
              </div>
          </form>
  </div>
  </div>
</div>
</main>
</section>
<?php
    include "./footer.php";
?>