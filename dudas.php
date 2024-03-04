<?php require_once('db/config.php') ?>
<?php require_once('partials/header.php') ?>
<!--*************************************-->
<section id="hero">
	<header>
		<div class="contenedor">
			<nav>
				<ul>
					<a class="btn btn-sm text-white" href="index.php">Inicio</a>
					<a class="btn btn-sm text-white" href="cursos.php">Cursos</a>
					<a class="btn btn-sm text-white" href="dudas.php">¿Dudas?</a>
					<a class="btn btn-sm text-white" href="nosotros.php">¿Quienes Somos?</a>
					<a class="btn btn-sm text-white" href="login/login.php">Iniciar sesión</a>
				</ul>
			</nav>
		</div>
	</header>
	<section id="hero-text">
		<h1>Sección: ¿Dudas?.</h1>
	</section>
</section>
<center><img id="img-curso" class="rounded-circle shadow" src="img/MT.png"></center>
<?php if (isset($_SESSION['message'])){?>
			<div class="container mt-3 alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
				  <?= $_SESSION['message']; ?>
				  <a href="index.php" class="btn btn-success btn-sm btn-close"></a>
				  	<!--a href="index.php" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a-->
				</div>
	<?php session_unset(); } ?>	

<div class="container mt-3">
	<h1>Envianos tus dudas o comentarios por los siguientes medios:</h1>
	<hr>
	<p>Por medio de las siguientes plataformas puedes contactarnos detallando tus dudas o simplemente solicitando mas información sobre lo que hacemos o en algun curso en especial.</p>
	<div class="row">
			<div class="col-md-3">
				<center>
					<img id="img-redes" src="img/log_g.png"><br>
					<b class="text-info">shapes3d.utponiente@Gmail.com</b>
				</center>
			</div>
			<div class="col-md-3">
				<center>
					<img id="img-redes" src="img/log_f.png"><br>
					<b class="text-info">Shapes_3D</b>
				</center>				
			</div>
			<div class="col-md-3">
				<center>
					<img id="img-redes" class="rounded-circle" src="img/log_w.png"><br>
					<b class="text-info">9995461081</b>
				</center>
				
			</div>
			<div class="col-md-3">
				<center>
					<img id="img-redes" src="img/log_y.png"><br>
					<b class="text-info">Shapes 3D</b>
				</center>
			</div>
	</div>
</div>
<section id="dudas-hero">
	<div class="container mt-3">
		<h3>Sección de comentarios:</h3>
		<p>Aquí puedes realizar tu comentario, hablanos sobre tus dudas o de algun tema de acorde a lo que en nuestra empresa Shapes 3D realizamos.</p>
		<div class="row">
			<!-- SECCION DE CREACION DE COMENTARIOS -->
			<div class="col-md-3 ">
				<hr>
				<b>Crea tu comentario aquí:</b>
				<div class="container">
					<div class="row border p-2">
						<form method="POST" action="db/create.php">
							<input type="number" name="metodo" value="2" hidden>
							<label class="form-label">Nombre:</label><br>
							<input class="form-control" type="text" name="name" required>
							<!-- * -->
							<label class="form-label">Correo:</label><br>
							<input class="form-control" type="email" name="email" required>
							<!-- * -->
							<label class="form-label">Comentario:</label><br>
							<textarea class="form-control" name="message"></textarea>
							<hr>
							<center><button class="btn btn-success btn-sm shadow">Enviar comentario!!</button></center>
						</form>
					</div>
				</div>
			</div>
			<!-- FIN DE SECCION DE CREACION DE COMENTARIOS -->
			<?php
				$query = "SELECT * FROM comentarios ORDER BY idcommit DESC LIMIT 1";
				$consulta = mysqli_query($conn, $query);
				$row = mysqli_fetch_array($consulta);
			?>
			<!-- SECCION DE MOSTRAR TODOS LOS COMENTARIOS -->
			<div class="col-md-9">
				<hr>
				<b>Todos los comentarios.</b>
				<div class="container">
					<?php if ($row == null) {?>
						<small>
							<div class="row border p-2">
								<center><h3><b>No hay comentarios aún...</b></h3></center>
							</div>
						</small>
					<?php }else{ ?>
						<small>
							<div>
								<?php 									
									$query = "SELECT * FROM comentarios";
									$consulta = mysqli_query($conn, $query);
									/* - - - - - - - - - - - - - - - - - - */
									while ($row = mysqli_fetch_array($consulta)){
								?>
									<div class="row border p-3 my-4 shadow" id="<?php echo $row['idcommit']; ?>">
										<!-- -->
										<input type="text" name="<?php echo $row['name']; ?>" value="<?php echo $row['name']; ?>" hidden>
										<!-- -->
										<p><b>Nombre: </b><?php echo $row['name']; ?> | <b>Correo: </b><?php echo $row['email']; ?></p>
										<p><b>Comento lo siguiente: </b></p>
										<p><?php echo $row['message']; ?></p>
										<hr>
										<!-- * SECCION DE RESPUESTAS A COMENTARIOS * -->
										<?php 
											$queryAnswer = "SELECT * FROM respuestas";
											$consultaAnswer = mysqli_query($conn, $queryAnswer);
											/* - - - - - - - - - - - - - - - - - - */
											while ($answers = mysqli_fetch_array($consultaAnswer)) { ?>
											<!-- * * * -->
												<?php 
													if ($row['name'] == $answers['username']) {
														echo '<ul><li>'.$answers['answer'].'</li></ul>';
													}
												?>
											<!-- * * * -->
										<?php } ?>
										<!-- * * * -->
										<div class="container">
											
											<form method="POST" action="db/create.php">
												<div class="row">
													<div class="col-md-9">
														<input type="number" name="metodo" value="3" hidden>
														<input type="text" name="username" value="<?php echo $row['name']; ?>" hidden>
														<input type="text" name="answer" required placeholder="Escribe algo para <?php echo $row['name']; ?>" class="form-control">
													</div>
													<div class="col-md-3">
														<button class="btn btn-success btn-sm shadow">Responder!!</button>
													</div>
												</div>													
											</form>
										</div>
									</div>
								<?php } ?>
							</div>
						</small>
					<?php } ?>
				</div>
			</div>
			<!-- FIN DE MOSTRAR TODOS LOS COMENTARIOS -->
		</div>
	</div>
</section>
<!--*************************************-->
<?php require_once('partials/footer.php') ?>