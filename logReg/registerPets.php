
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Pets</title>
    <link rel="icon" href="../../img/icon.png">

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="../css/log/registerPets.css">
</head>
<body>
    <div class="container">
                <div class="img">
                    <img src="../img/registra.png">
                </div>
                <div class="form_Login">
                    <form action="../php/registroValidar.php" method="POST">
                        <!-- Progreso -->
                        <div class="progressbar">
                            <div class="progress" id="progress"></div>
                        
                        <!-- Barra de progreso -->
                        
                            <div class="step-progress progress-active" data-title="Dueño"></div>
                            <div class="step-progress" data-title="Mascota"></div>
                            <div class="step-progress" data-title="Dirección"></div>
                        
                        </div>
                        <!-- Entradas de datos -->
                        <div class="form-step form-step-active">
                            <div class="title">
                                <h3>Registrar</h3>
                            </div>
                            
                            <div class="input-div one">
                                <div class="i">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <h5 class="datos">Nombre</h5>
                                    <input type="text" autocomplete="off" class="input" name="nombre" required>
                                </div>
                            </div>
                        
                            <div class="input-div pass">
                                <div class="i">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <h5 class="datos">Apellido</h5>
                                    <input type="text" autocomplete="off" class="input" name="apellido" required>
                                </div>
                            </div>

                            <div class="input-div pass">
                                <div class="i">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <h5 class="datos">Telefono</h5>
                                    <input type="text" class="input" name="telefono" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="input-div pass">
                                <div class="i">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h5 class="datos">Correo</h5>
                                    <input type="email" class="input" name="email" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="input-div pass">
                                <div class="i">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div>
                                    <h5 class="datos">Contraseña</h5>
                                    <input type="password" class="input" name="password" required>
                                </div>
                            </div>
                            <br>
                            <div class="">
                                <a href="#" class="btn btn-next width-50 ml-auto">Siguiente</a>
                            </div>
                            ¿Ya tienes una cuenta?
                            <div class="volver">
                                <a href="../index.php" class="back">Volver</a>
                                <a href="login.html" class="btn-iniciar">Ingresa</a>
                            </div>
                        </div>


                        <!-- Registro de la mascota -->
                        <div class="form-step">
                            <div class="title">
                                <h3>Registra su Mascota</h3>
                            </div>
                            
                            <div class="input-div one">
                                <div class="i">
                                    <i class="fas fa-paw"></i>
                                </div>
                                <div>
                                    <h5 class="datos">Nombre</h5>
                                    <input type="text" class="input" name="nombreMascota" autocomplete="off" required>
                                </div>
                            </div>
                        
                            <div class="input-div pass">
                                <div class="i">
                                    <i class="fa-solid fa-shield-dog"></i>
                                </div>
                                <div>
                                    <h5 class="datos">Especie</h5>
                                    <input type="text" class="input" name="especie" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="input-div pass">
                                <div class="i">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div>
                                    <h5 class="datos">Raza</h5>
                                    <input type="text" class="input" name="raza" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="input-div pass">
                                <div class="i">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div>
                                    <h5 class="select">Tamaño</h5>
                                    <select name="size" id="" class="input" require>
                                        <option value="">Por favor seleccione</option>
                                        <option value="Pequeña">Pequeña</option>
                                        <option value="Mediana">Mediana</option>
                                        <option value="Grande">Grande</option>
                                    </select>
                                    <!-- <input type="text" class="input" name="size" autocomplete="off" required> -->
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="btn-group">
                                <a href="#" class="btn btn-prev">Anterior</a>
                                <a href="#" class="btn btn-next">Siguiente</a>
                            </div>

                        </div>
                        
                        <div class="form-step">
                            <h3>Registra su Mascota</h3>
                            <div class="input-div one">
                                <div class="i">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div>
                                    <h5 class="datos">Fecha de Nacimiento</h5>
                                    <input type="text" class="input" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'" name="fechaNacimiento" required>
                                </div>
                            </div>
                        
                            <div class="input-div pass">
                                <div class="i">
                                    <i class="fas fa-venus-mars"></i>
                                </div>
                                <div>
                                    <h5 class="select">Sexo</h5>
                                    <select name="sexo" id="" class="input" required>
                                        <option value="">Por favor seleccione</option>
                                        <option value="Macho">Macho</option>
                                        <option value="Hembra">Hembra</option>
                                    </select>
                                    <!-- <input type="text" class="input" name="sexo" autocomplete="off" required> -->
                                </div>
                            </div>

                            <div class="input-div pass">
                                <div class="i">
                                    <i class="fa fa-syringe"></i>
                                </div>
                                <div>
                                    <h5 class="select">Vacuna</h5>
                                    <select name="vacuna" id="" class="input" required>
                                        <option value="">Por favor seleccione</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                    <!-- <input type="text" class="input" name="vacuna" autocomplete="off" required> -->
                                </div>
                            </div>
                            <div class="input-div pass">
                                <div class="i">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div>
                                    <h5 class="datos">Color</h5>
                                    <input type="text" class="input" name="color" autocomplete="off" required>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="btn-group">
                                <a href="#" class="btn btn-prev">Anterior</a>
                                <!-- <a href="../pages/usuarios/citas.php" class="btn btn-next">Registrar</a> -->
                                <input type="submit" class="btn btn-reg" value="Registrar">
                            </div>

                        </div>
                        
                        

                        <!-- <a href="#">Olvidó la contraseña?</a> -->
                        <!-- <input type="submit" class="btn" value="Ingresar">
                        Ya tienes una cuenta? <a href="login.html">Inicia Sesion</a> -->
                    </form>
                </div>
               
    </div>

    <script src="../js/register.js"></script>

</body>
</html>