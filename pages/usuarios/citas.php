
<?php
    include "./header.php";
	require('../../php/conexionBD.php');

	//variable global
    session_start();
    ob_start();
    $indice = $_SESSION['indice'];

    $BDusuario = "SELECT * FROM cita WHERE email_fk = '$indice' ";

	//Busquedas
	if(empty($_POST['busqueda'])){
		$BDusuario = "SELECT * FROM cita WHERE email_fk = '$indice' ";
	}
	else if(isset($_POST['buscar'])){
		$busqueda = $_POST['busqueda'];
		$BDusuario = "SELECT * FROM cita WHERE email_fk = '$indice' AND servicios LIKE '%$busqueda%' 
																	OR fechaCita LIKE '%$busqueda%' 
																	OR horaCita  LIKE '%$busqueda%' 
																	OR estado  LIKE '%$busqueda%' ";
	}

    $mostrar = mysqli_query($conexion, $BDusuario);

?>
	
 <!-- CONTENT -->
 <section id="contentCita">
	

		<!-- NAVBAR -->
	<nav>
		<div class="navbarCita">
			<i class="fas fa-bars"></i>

			<div class="form">
				<form action="citas.php" method="POST">
					<div class="form-input">
						<input type="search" autocomplete="off" name="busqueda" placeholder="Buscar...">
						<button type="submit" class="search-btn" name="buscar">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</form>
			</div>

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
	
			
	<!-- Tabla Principal -->
   <main>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Historial</h3>
					</div>
					
					<?php
                        $mensaje = "No tienes citas programadas";
                        if(mysqli_num_rows($mostrar) == 0){
                    ?>

                     <div class="mensaje">
                        <h2>No tienes citas programadas</h2>
                    </div>

                    <?php
                    }else{
                    ?>

					<table>
						<thead>
							<tr>
								<th>N°</th>
								<th>Servicio</th>
								<th>Fecha</th>
								<th>Hora</th>
								<th>Observación</th>
								<th>Estado</th>
							</tr>
						</thead>
						<tbody>

						<?php 
                        $cantidad = '0';
                        while($fila = mysqli_fetch_assoc($mostrar)) {
                            $cantidad++;
							$estado = $fila['estado'];
							?>
							<tr>
								<?php $fila['id_cita'] ?>
								<td> <?php echo $cantidad ?> </td>
								<td>  <?php echo $fila['servicios'] ?> </td>
								<td>  <?php echo $fila['fechaCita'] ?> </td>
                                <td>  <?php echo $fila['horaCita'] ?> </td>
                                <td>  <?php echo $fila['observacion'] ?> </td>
								<td>
									<?php if($fila['estado'] != "Atendido"){
										echo "<span class=\"status pending\"> $estado </span>";
									}else{
									echo "<span class=\"status completed\"> $estado </span";

									}
									
									?> 
								</td>
							</tr>

							<?php }} mysqli_free_result($mostrar); ?>

						</tbody>
					</table>
				</div>

			</div>
   </main>
 </section>
<?php
    include "./footer.php";
?> 