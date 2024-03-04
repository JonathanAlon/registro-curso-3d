<?php include('../../db/config.php'); ?>
<?php require_once('../partials/app.php') ?>
<!-- - - - - - -- - - - - - - - - - - - - - - -->
	<div  class="container">
		<!-- ***-->
		<?php
			$query = "SELECT * FROM participante;";
			$consulta = mysqli_query($conn, $query);
			$row = mysqli_num_rows($consulta);			
			if ($row == null) {
				$mensage = "No hay registros aún";		
			}
			$total = $row;;
			$faltan = 20 - $total;
		?>
		<!-- ***-->
		<p class="mb-1">Hay <?php echo $total; ?> de 20 participantes</p>
		<hr class="mb-2 p-0">
	</div>
	<!-- *** -->
	<div class="row">
		<div class="container">
			<div class="row">
				<!-- ***-->
				<?php 
					/* <-- -- --- -- -->*/
					if ($row == null) {
						echo '<center><h5>'.$mensage.'</h5></center>';
					}else{
						$query = "SELECT * FROM participante;";
						$consulta = mysqli_query($conn, $query);
						$num = 0;
						while ($row = mysqli_fetch_array($consulta)) {
						$num++; 
				?>
				<!-- ***-->
				<div id="items__section_info" class="col-4 card card-body px-5" style="display: inline-table;">
					<p><b>>Registro #<?php echo $num; ?></b></p>
					<b>Nombre completo:</b>
					<p><?php echo $row['name']; ?> <?php echo $row['lastname']; ?></p>
					<b>Carrera:</b>
					<p><?php echo $row['career']; ?></p>
					<b>Grado | Grupo:</b>
					<p><?php echo $row['grade']; ?> | <?php echo $row['grupe']; ?></p>
					<p>*Medios de contactar:</p>
					<b>Teléfono:</b>
					<p><?php echo $row['phone']; ?></p>
					<b>Correo:</b>
					<p><?php echo $row['email']; ?></p>
				</div>
					<!-- ***-->
				<?php
					}
				}
				?>
			</div>
		</div>
	</div>
<!-- - - - - - -- - - - - - - - - - - - - - - -->
<?php require_once('../partials/footer.php') ?>