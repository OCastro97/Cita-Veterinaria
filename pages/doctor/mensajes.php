<?php 
    include("./header.php"); 
    require('../../php/conexionBD.php');

    $BDcontactos = "SELECT * FROM contacto";

    // Barra de Busqueda
    if(isset($_POST['buscar'])){
        $busqueda = $_POST['busqueda'];
        $BDcontactos = "SELECT * FROM contacto WHERE nombre_contac LIKE '%$busqueda%' 
                                            OR correo_contac LIKE '%$busqueda%' 
                                            OR estado  LIKE '%$busqueda%' ";
        }

    $mostrar = mysqli_query($conexion, $BDcontactos);
?>

	
    
    <div class="mainMensajes">
            <div class="topbar">
                <div class="toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <!-- Barra busqueda -->
                <form action="mensajes.php" method="POST" class="buscador">
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
    <div class="mensajes">
                <!-- Detalles del historial -->
                <div class="tituloMensajes"> <!--recentOrders -->
                    <div class="titulo"> <!--cardHeader -->
                        <h2> Mensajes Recibidos </h2>
                        <a href="#" class="btn">Ver todo</a>
                    </div>
                    
                    <?php
            $num='0';
            $contar = $mostrar;
            $mensaje="No hay pacientes";
            if( mysqli_num_rows($mostrar) == 0){
        ?> 
        <div class="mensaje">
            <h2>No hay registro</h2>
        </div>
            
        <?php
         }else{
        ?>

                    <div class="table">

                    <table>
                        <thead class="sticky-title">
                            <tr>
                                <th class="sticky">N°</th>
                                <th class="sticky">Nombre</th>
                                <th class="sticky">Email</th>
                                <th class="sticky">Telefono</th>
                                <th class="sticky">Mensaje</th>
                                <th class="sticky">Estado</th>
                            </tr>
                        </thead>
                        <tbody class="lista">
                        <?php while($fila = mysqli_fetch_assoc($mostrar)) {
                            $estado = $fila['estado'];
                            $datosContacto = $fila['id_contact'];
                            $num++;?>
                            <tr>
                                <td><?php echo $num?></td>
                                <td> <?php echo $fila['nombre_contac'] ?> </td>
                                <td> <?php echo $fila['correo_contac'] ?> </td>
                                <td> <?php echo $fila['telefono_contac'] ?> </td>
                                <td> <?php echo $fila['mensaje'] ?> </td>
                                
                                 <td> 
                                    <?php 
                                        if($fila['estado'] != "Respondido"){
                                             echo"<a href=\"./responderMensaje.php?id=$datosContacto\" class=\"status noatendido\"> $estado </a>";
                                        }else{
                                            echo $fila['estado']=
                                            '<a href="#" class="status atendido">Respondido</a>';
                                        }                                 
                                    ?>
                                </td> 

                            </tr>
                        <?php }} mysqli_free_result($mostrar); ?>
                        </tbody>
                    </table>
                    
                    </div>
                </div>
    </div>
    </div>


<?php include("./footer.php"); ?> 

