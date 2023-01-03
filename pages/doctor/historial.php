<?php 
include("./header.php"); 
require('../../php/conexionBD.php');

$BDusuario = "SELECT * FROM cita";

if(isset($_POST['buscar'])){
    $busqueda = $_POST['busqueda'];
    $BDusuario = "SELECT * FROM cita WHERE nombre LIKE '%$busqueda%'
                                    OR mascotaNombre LIKE '%$busqueda%'
                                    OR servicios LIKE '%$busqueda%'
                                    OR fechaCita  LIKE '%$busqueda%'
                                    OR horaCita  LIKE '%$busqueda%'
                                    OR estado  LIKE '%$busqueda%' ";
}

$mostrar = mysqli_query($conexion, $BDusuario);
?> 
   
    <div class="mainHistorial">
            <div class="topbar">
                <div class="toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <!-- Barra busqueda -->
                <form action="historial.php" method="POST" class="buscador">
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
    <div class="historial">
                <!-- Detalles del historial -->
                <div class="tituloHistorial"> <!--recentOrders -->
                    <div class="titulo"> <!--cardHeader -->
                        <h2> Historial </h2>
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
                                <th class="sticky">Dueño</th>
                                <th class="sticky">Mascota</th>
                                <th class="sticky">Especie</th>
                                <th class="sticky">Servicio</th>
                                <th class="sticky">Fecha</th>
                                <th class="sticky">Hora</th>
                                <th class="sticky">Descripción</th>
                                <th class="sticky">Estado</th>
                            </tr>
                        </thead>
                        <tbody class="lista">
                        
                        <?php
                            $cantidad = '0';
                            while($fila = mysqli_fetch_assoc($mostrar)) {
                                $estado = $fila['estado'];
                                $idCita = $fila['id_cita'];
                                $cantidad++;
                        ?>
                            <tr>
                                <td> <?php echo $cantidad ?> </td>
                                <td> <?php echo $fila['nombre'] ?> </td>
                                <td> <?php echo $fila['mascotaNombre'] ?> </td>
                                <td> <?php echo $fila['especie'] ?> </td>
                                <td> <?php echo $fila['servicios'] ?> </td>
                                <td> <?php echo $fila['fechaCita'] ?> </td>
                                <td> <?php echo $fila['horaCita'] ?> </td>
                                <td> <?php echo $fila['observacion'] ?> </td>
                                <td>
                                <?php 
                                    if($fila['estado'] != "Atendido"){
                                         echo"<a href=\"./statusCitas.php?id=$idCita\" class=\"status noatendido\"> $estado </a>";
                                    }else{
                                        echo $fila['estado']=
                                        '<a href="#" class="status atendido">Atendido</a>';
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