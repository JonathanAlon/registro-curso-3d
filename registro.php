<?php include('db/config.php'); ?>
<?php //include('db/send_email.php'); ?>
<!-- - - - - - - -->
<?php require_once('partials/header_two.php') ?>
<!-- - - - - - - -->
<div  >
<div class="container mt-3">
	<!-- - - - - - - -->
	<?php if (isset($_SESSION['message'])){?>
		<div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
		  	<?= $_SESSION['message']; ?>
			<a href="index.php" class="btn btn-success btn-sm btn-close"></a>
		  	<!--a href="index.php" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a-->
		</div>
	<?php session_unset(); } ?>			
	<!-- - - - - - - -->
	<h5>Formulario de registro</h5>
	<div class="row">
		<div class="col-md-5">
			<div class="card-body shadow my-3">
				<form id="carta" method="POST" action="db/create.php" enctype="multipart/form-data">
					<input type="number" name="metodo" value="1" hidden>
					<p title="Estos datos se recaban con el fin de crear una lista para los organizadores del evento y asi poder crear una lista de asistencia"><b>¿Para que es esta información?</b></p>
					<hr>
					<label class="form-label">Ingresa tu nombre:</label>
					<input class="form-control" type="text" name="name" placeholder="Nombre(s)" required><br>
					<!-- - -->
					<label class="form-label">Ingresa tu apellido:</label>
					<input class="form-control" type="text" name="lastname" placeholder="Apellido(s)" required><br>
					<!-- - -->
					<label class="form-label">¿De qué carrera eres?:</label>
					<select class="form-select" name="career" required>
						<option disabled>Selecciona</option>
						<option value="Externo a la Universidad...">Externo a la Universidad...</option>
						<option value="Ingenieria: Gestión y Desarrollo Software">Ingenieria: Gestión y Desarrollo Software</option>
						<option value="TSU: Desarrollo de Software Multiplataforma">TSU: Desarrollo de Software Multiplataforma</option>
					</select>
					<br>
					<!-- - -->
					<div class="row">
						<div class="col-4">
							<label>Grado</label>
							<select class="form-select" name="grade">
								<option disabled>Tu cuatrimestre actual</option>
								<option value="1ero">1ero</option>
								<option value="2do">2do</option>
								<option value="3ero">3ero</option>
								<option value="4to">4to</option>
								<option value="5to">5to</option>
								<option value="6to">6to</option>
								<option value="7mo">7mo</option>
								<option value="8vo">8vo</option>
								<option value="9no">9no</option>
								<option value="10mo">10mo</option>
								<option value="11vo">11vo</option>
								<option value="12vo">12vo</option>
							</select>
						</div>
						<div class="col-4">
							<label>Grupo</label>
							<select class="form-select" name="grupe">
								<option disabled>Tu grupo actual</option>
								<option value="A">A</option>
								<option value="B">B</option>
							</select>
						</div>
					</div>
					<br>
					<!-- - -->
					<label class="form-label">Ingresa un numero de contacto:</label>
					<input class="form-control" type="number" name="phone" placeholder="999999999" required><br>
					<!-- - -->
					<label class="form-label">Ingresa un correo electronico:</label>
					<input class="form-control" type="email" name="email" placeholder="Nombre@Gamil.com" required>
					<hr>
					<center>
						<button type="submit" class="btn btn-success btn-sm">Registrarme !!</button><br>
						<small><a href="#">Politica de manejo de la información</a></small>
					</center>
				</form>
			</div>
		</div>
		<div id="hero" class="col-md-7">
			<center>
				<img src="img/MT.png" style="width: 350px; height: 350px;" class="rounded-circle shadow">
			</center>
		</div>
	</div>
</div>
</div>
<!-- - - - - - - -->
<section id="footer">
	<?php require_once('partials/footer.php') ?>
</section>