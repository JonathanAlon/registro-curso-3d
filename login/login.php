<?php include('../db/config.php'); ?>
<?php require_once('partials/header-login.php') ?>
<!-- ------------------------------------------ -->
<div class="container mt-4" id="card-login">
	<div class="row" >
		<div class="col-md-6" id="part-one">
			<img id="img-login" src="../img/logo-outbg.png" class="rounded-circle">
		</div>
		<!-- * * * -->
		<div class="col-md-6" id="part-two">
			<!-- - - - - - - -->
			<?php if (isset($_SESSION['message'])){?>
				<div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
				  	<?= $_SESSION['message']; ?>
					<!--a href="index.php" class="btn btn-success btn-sm btn-close"></a>
				  	<a href="index.php" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a-->
				</div>
			<?php session_unset(); } ?>			
			<!-- - - - - - - -->
			<h4>Ingresa a tu cuenta</h4>
			<form method="POST" action="../db/db_actions.php">
				<input type="number" name="metodo" value="3" hidden>
				<!-- * * * -->
				<label class="form-label"><b class=""><small>Correo:</small></b></label>
				<input class="form-control" type="email" name="email" placeholder="Ingresa tu correo..." required>
				<!-- * * * -->
				<label class="form-label mt-2"><b class=""><small>Contraseña:</small></b></label>
				<input class="form-control" type="password" name="password" placeholder="Ingresa tu contraseña..." required>
				<center>
					<button class="btn btn-success btn-sm mt-4 shadow">Ingresar!</button>
					<p class="mt-2">Crea tu cuenta <a href="create-new-user.php">aquí</a></p>
				</center>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" id="get-acount">
			<small><a href="#">Terminos de uso</a> <a href="#">Recuperar cuenta</a></small>
		</div>
	</div>
</div>
<!-- ------------------------------------------ -->
<?php require_once('partials/footer.php') ?>