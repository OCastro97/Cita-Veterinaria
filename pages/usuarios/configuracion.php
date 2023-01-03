
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

<section id="contentConfig">
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
    <div class="content-data">

        <div class="contenedor">
            <!-- Cambio de la contraseña y actualizacion de datos del usuario -->
                <header>Configuraciones</header>
            
                    <form action="../../php/recuperarPass.php" method="POST">
                        <div class="form first">
                            <div class="detalles personales">
                                <span class="title">Cambiar Contraseña</span>

                                <div class="fields">
                                        <div class="input-field">
                                            <label for="">Correo Electrónico</label>
                                            <input type="email" name="email" required>
                                        </div>
                                        
                                        <div class="input-field">
                                            <label for="">Nueva Contraseña</label>
                                            <input type="password" name="passverficar1" required>
                                        </div>

                                        <div class="input-field">
                                            <label for="">Vuelve Contraseña</label>
                                            <input type="password" name="passverficar2" required>
                                        </div>

                                        <button class="submit">
                                            <span class="submit">Cambiar</span>
                                            <i class="fas fa-check"></i>
                                         </button>
                                </div> 
                            </div>
                        </div>
                 </form>
        </div>
    </div>
</main>
<?php
    include "./footer.php";
?>