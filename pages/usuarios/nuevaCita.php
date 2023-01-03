
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
 <section id="contentNew">
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
<div class="content-cita">

  <div class="contenedor-cita">
    
        <header>Nueva Cita</header>
    
            <form action="./registrarCita.php" method="POST">


                <div class="form first-cita">
                    <div class="detalles personales">
                        <span class="title">Detalles de la Mascota</span>

                        <input type="hidden" value="<?php echo $fila["email"];?>" name="email">

                        <div class="fields-cita">
                            <div class="input-field-cita">
                                <label for="">Dueño</label>
                                <input type="text" name="nombre" value="<?php echo $fila['nombre'],' ',$fila['apellido']?>" required>
                            </div>

                            <div class="input-field-cita">
                                <label for="">Mascota</label>
                                <input type="text" name="mascota" value="<?php echo $fila['mascotaNombre'] ?>" required>
                            </div>

                            <div class="input-field-cita">
                                <label for="">Especie</label>
                                <input type="text" name="especie" value="<?php echo $fila['especie'] ?>" required>
                            </div>

                            <div class="input-field-cita">
                                <label for="">Raza</label>
                                <input type="text" name="raza"  value="<?php echo $fila['raza'] ?>" >
                            </div>

                            <div class="input-field-cita">
                                <label for="">Sexo</label>
                                <input type="text" name="sexo" value="<?php echo $fila['sexo'] ?>" required>
                            </div>
                            <div class="input-field-cita">
                                <label for="">Vacuna</label>
                                <input type="text" name="vacuna" value="<?php echo $fila['vacuna'] ?>" >
                            </div>
                        </div>
                    </div>

                    <?php mysqli_free_result($mostrar)?>

                    <div class="detalles personales">
                        <span class="title">Detalles de la Cita</span>

                        <div class="fields-cita">
                            <div class="input-field-cita">
                                <label for="">Fecha cita</label>
                                <input type="date" name="fechaCita" required>
                            </div>

                            <div class="input-field-cita">
                                <label for="">Hora Cita</label>
                                <select name="horaCita" id="">
                                    <option value="7:00 AM">7:00 AM</option>
                                    <option value="8:30 AM">8:30 AM</option>
                                    <option value="10:00 AM">10:00 AM</option>
                                    <option value="11:30 AM">11:30 AM</option>
                                    <option value="1:00 PM">1:00 PM</option>
                                    <option value="2:30 PM">2:30 PM</option>
                                    <option value="4:00 PM">4:00 PM</option>
                                    <option value="5:30 PM">5:30 PM</option>
                                </select>
                            </div>

                            <div class="input-field-cita">
                                <label for="">Servicio</label>
                                <select name="servicios" required>
                                    <option value="">Seleccione el servicio</option>
                                    <option value="Veterinaria">Veterinaria</option>
                                    <option value="Peluquería">Peluquería</option>
                                    <option value="otros">Otros</option>
                                </select>
                            </div>

                            <div class="input-field-cita">
                                <label for="">Observación</label>
                                <input type="text" name="observacion">
                            </div>

                        </div>

                        <button class="submit">
                                <span class="submit">Añadir</span>
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