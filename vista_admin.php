<?php include('db/config.php'); ?>
<?php require_once('partials/header_two.php') ?>
<!-- - - - - - - -->
	<div class="container mt-3">
		<?php
			$query = "SELECT * FROM participante ORDER BY idparticipante DESC LIMIT 1";
			$consulta = mysqli_query($conn, $query);
			$row = mysqli_fetch_array($consulta);
			if ($row == null) {
				$total = 0;
				$mensage = "No hay registros aún";
			}else{
				$total = 0;//$row['idparticipante'];
			}
			$total++;
			$faltan = 20 - $total;
		?>
		<?php if (isset($_SESSION['message'])){?>
			<div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
				<?= $_SESSION['message']; ?>
				<!--a href="#" class="btn btn-success btn-sm btn-close"></a-->
				<!--a href="index.php" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a-->
			</div>
		<?php session_unset(); } ?>
		
		
				<form method="POST" action="db/db_actions.php">
					<input type="number" name="metodo" value="1" hidden>
					<button class="btn btn-danger btn-sm m-1" >Resetear tabla 'participantes'</button>
				</form>
			
				<form method="POST" action="db/db_actions.php">
					<input type="number" name="metodo" value="2" hidden>
					<button class="btn btn-danger btn-sm m-1">Borrar tabla 'comentarios'</button>
				</form>
			
		<div class="row">
			<div class="col-md-12">
				<center>
					<p>Hay <?php echo $total; ?> participantes para este curso, faltan <?php echo $faltan; ?> para el limite de 20 participantes</p>
				</center>
			</div>
		</div>
		<div class="row">
			<?php 

				if ($row == null) {
				echo '<center>
				<h5>'.$mensage.'</h5>
				<img src="img/MT.png">
				</center>';
			}else{

				$query = "SELECT * FROM participante";
				$consulta = mysqli_query($conn, $query);
				while($row = mysqli_fetch_array($consulta)){ 
					$num = 0;
					$num++;
			?>
			<div class="col-md-3 card card-body m-2 shadow">
				<p class="h6 p-0 m-0">Registro: #<?php echo $num; ?></p>
				<hr>
				<p class="h6 py-0">Datos del participante:</p>
				<p class="small m-0">Nombre completo:</p>
				<p class="h5 p-0"><?php echo $row['name']; ?> <?php echo $row['lastname']; ?></p>
				<p class="small m-0">Carrera:</p>
				<p class="h5 p-0"><?php echo $row['career']; ?></p>
				<p class="small m-0">Grado | Grupo:</p>
				<p class="h5 p-0"><?php echo $row['grade']; ?> | <?php echo $row['grupe']; ?></p>
				<hr>
				<p class="h6 py-0">Medios de contacto:</p>
				<p class="small m-0">Teléfono:</p>
				<p class="h5 p-0"><?php echo $row['phone']; ?></p>
				<p class="small m-0">Correo:</p>
				<p class="h5 p-0"><?php echo $row['email']; ?></p>
				<hr>
				<form method="POST" action="db/send_email.php" name="enviar">
					<!-- Datos para el envio del correo programado -->
					<input type="text" name="correo" value="<?php echo $row['email']; ?>" hidden>
					<center>
						<button class="btn btn-success btn-sm">Enviar notificación por correo</button>
					</center>
				</form>
			</div>
			<?php } ?>
		</div>
		<hr>
		<?php 
			
			}
		?>
		
	</div>
<!-- - - - - - - -->
<section id="footer">
	<?php require_once('partials/footer.php') ?>
</section>