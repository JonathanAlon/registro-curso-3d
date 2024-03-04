<?php include('../../db/config.php'); ?>
<?php require_once('../partials/app.php') ?>
<!-- - - - - - -- - - - - - - - - - - - - - - -->
<div id="login__container">
	<center>
		<?php if (isset($_SESSION['message'])){?>
			<div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
			  	<?= $_SESSION['message']; ?>
			  	<a href="#" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
			</div>
		<?php } ?>
		<img id="img-login" src="../../img/logo-outbg.png" class="rounded-circle" alt="LogoShapes3D">
	</center>
	<h5>Informacion de esta sesión</h5>
	<?php if (isset($_SESSION['userName'])){ ?>
		<p>Nomre(s): <?php echo $_SESSION['userName']; ?></p>		  	
		<p>Apellido(s): <?php echo $_SESSION['lastName']; ?></p>		  	
		<p>¿Es estudiante?: <?php echo $_SESSION['i_am']; ?></p>		  	
		<p>Correo: <?php echo $_SESSION['email']; ?></p>		  	
		<p>Teléfono: <?php echo $_SESSION['phone']; ?></p>		  	
	<?php } ?>		
</div>
<!-- - - - - - -- - - - - - - - - - - - - - - -->
<?php require_once('../partials/footer.php') ?>