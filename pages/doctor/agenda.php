<?php 
 include("./header.php");
 require('../../php/conexionBD.php');

 $BDusuario = "SELECT * FROM cita";

//  Barra de Busqueda
if(isset($_POST['buscar'])){
    $inicio = date("Y-m-d", strtotime($_POST['fechaInicio']));
    $fin = date("Y-m-d", strtotime($_POST['fechaFinal']));

    $BDusuario = "SELECT * FROM cita WHERE fechaCita BETWEEN '$inicio' AND '$fin' ORDER BY fechaCita ASC";
}

 $mostrar = mysqli_query($conexion, $BDusuario);
?> 

	

<div class="mainAgenda">
            <div class="topbar">
                <div class="toggle">
                    <i class="fas fa-bars"></i>
                </div>
               
                <!-- perfil Usuario -->
                <div class="user">
                    <div class="user-conf">
                        <div class="perfil">
                            <img src="../../img/perfil.jpg">
                        </div>
                    </div>                   
                </div>
            </div>

<div class="agenda">
                <!-- Detalles del historial -->
    <div class="tituloAgenda"> <!--recentOrders -->
        <div class="titulo"> <!--cardHeader -->
            <h2 class="current-date"></h2>
            <div class="icons">
                <span id="prev" class="material-symbols-rounded">chevron_left</span>
                <span id="next" class="material-symbols-rounded">chevron_right</span>
            </div>
        </div>
                
        <div class="calendar">
            <ul class="weeks">
            <li>Dom</li>
            <li>Lun</li>
            <li>Mar</li>
            <li>Mie</li>
            <li>Jue</li>
            <li>Vie</li>
            <li>Sab</li>
            </ul>
            <ul class="days"></ul>
        </div>
    </div>
<!-- Lista de Pacientes -->

    <div class="recentCustomers">
        <div class="cardHeader">
            <h2>Pacientes </h2>
                        <!-- <a href="#" class="btn">View All</a> -->
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
                <th class="sticky">Servicio</th>
                <th class="sticky">fecha</th>
                <th class="sticky">Hora</th>
                <th class="sticky">Estado</th>
            </tr>
        </thead>
        <tbody class="lista">
                    
                    <?php  while($fila = mysqli_fetch_assoc($mostrar)){
                        $estado = $fila['estado'];
                        $idCita = $fila['id_cita'];
                        $num++;
                    ?>
                        <tr>
                            <?php $fila['id_cita']?>
                            <td> <?php echo $num; ?> </td>
                            <td> <?php echo $fila['nombre'] ?> </td>
                            <td> <?php echo $fila['mascotaNombre'] ?> </td>
                            <td> <?php echo $fila['servicios'] ?> </td>
                            <td> <?php echo $fila['fechaCita'] ?> </td>
                            <td> <?php echo $fila['horaCita'] ?> </td>
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
