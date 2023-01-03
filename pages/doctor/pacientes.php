
<?php 
    include("./header.php"); 
    require('../../php/conexionBD.php');

    $BDusuario = "SELECT * FROM usuario";

    // Barra de Busqueda
    if(isset($_POST['buscar'])){
		$busqueda = $_POST['busqueda'];
		$BDusuario = "SELECT * FROM usuario WHERE nombre LIKE '%$busqueda%' 
                                            OR apellido LIKE '%$busqueda%' 
											OR email LIKE '%$busqueda%' 
											OR mascotaNombre  LIKE '%$busqueda%' ";
	}

    $mostrar = mysqli_query($conexion, $BDusuario);
?> 

     <!-- menu -->
     <div class="mainPacientes">
            <div class="topbar">
                <div class="toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <!-- Barra busqueda -->
                <form action="pacientes.php" method="POST" class="buscador">
                    <div class="search">
                        <label for="">
                            <input type="text" autocomplete="off" name="busqueda" id="" placeholder="Buscar...">
                            <button name="buscar" value="buscar"><i class="fas fa-search"></i></button>
                        </label>
                    </div>
                </form>
                <!-- perfil Usuario -->
                <div class="user">
                    <div class="user-conf">
                        <div class="perfil">
                            <img src="../../img/perfil.jpg">
                        </div>
                    </div>                   
                </div>
            </div>

    <!-- Detalles historial -->
    <div class="pacientes">
                <!-- Detalles del historial -->
                <div class="tituloPacientes"> <!--recentOrders -->
                    <div class="titulo"> <!--cardHeader -->
                        <h2> Historial </h2>
                        <a href="#" class="btn">Ver todo</a>
                    </div>
                    
                    <div class="table">

                    <table>
                        <thead class="sticky-title">
                            <tr>
                                <th class="sticky">N°</th>
                                <th class="sticky">Nombre</th>
                                <th class="sticky">Apellido</th>
                                <th class="sticky">Telefono</th>
                                <th class="sticky">Correo</th>
                                <th class="sticky">Mascota</th>
                                <th class="sticky">Especie</th>
                                <th class="sticky">Raza</th>
                                <th class="sticky">Tamaño</th>
                                <th class="sticky">Nacimiento</th>
                                <th class="sticky">Sexo</th>
                                <th class="sticky">Vacuna</th>
                                <th class="sticky">Color</th>
                                <th class="sticky">Opcion</th>
                            </tr>
                        </thead>
                        <tbody class="lista">
                        <?php 
                        $cantidad = '0';
                        while($fila = mysqli_fetch_assoc($mostrar)) {
                            $cantidad++;?>
                            <tr>
                                <td> <?php echo $cantidad ?> </td>
                                <td> <?php echo $fila['nombre'] ?> </td>
                                <td> <?php echo $fila['apellido'] ?> </td>
                                <td> <?php echo $fila['telefono'] ?> </td>
                                <td> <?php echo $fila['email'] ?> </td>
                                <td> <?php echo $fila['mascotaNombre'] ?> </td>
                                <td> <?php echo $fila['especie'] ?> </td>
                                <td> <?php echo $fila['raza'] ?> </td>
                                <td> <?php echo $fila['size'] ?> </td>
                                <td> <?php echo $fila['fechaNacimiento'] ?> </td>
                                <td> <?php echo $fila['sexo'] ?> </td>
                                <td> <?php echo $fila['vacuna'] ?> </td>
                                <td> <?php echo $fila['color'] ?> </td>
                                <td class="icon"> 
                                    <a href="./actualizarDatos.php?id=<?php echo $fila['id_user'];?>" class="status atendido"><i class="fas fa-edit"></i></a>
                                    <a href="./eliminarPacientes.php?id=<?php echo $fila['id_user'];?>" class="status noatendido"><i class="fas fa-trash-alt"></i></a> 
                                </td>
                            </tr>
                            <?php } mysqli_free_result($mostrar); ?>
                        </tbody>
                    </table>
                    </div>
                </div>
    </div>
     </div>


<?php include("./footer.php"); ?> 

