<?php require_once('partials/header-login.php') ?>
<!-- - - - - - -- - - - - - - - - - - - - - - -->
<div class="row" id="form-registrer">
	<div class="row" id="form-navigation">
		<h3 class="text-right">Nuevo usuario</h3>
	</div>
	<form id="form-content" method="POST" action="../db/create.php">
		<!-- Metodo de procedimiento -->
		<input type="number" name="metodo" value="4" hidden>
		<!-- * * * -->
		<p><b class="text-info mt-2">Detalles de tu perfil:</b></p>
		<label class="form-label">Nombre(es):</label>
		<input class="form-control" type="text" name="userName" placeholder="Ingresa tu nombre(s)..." required>
		<!-- * * * -->
		<label class="form-label mt-2">Apellido(s):</label>
		<input class="form-control" type="text" name="lastName" placeholder="Ingresa tu nombre(s)..." required>
		<!-- * * * -->
		<label class="form-label mt-2">¿Eres estudiante?</label>
		<select class="form-select" required name="i_am">
			<option disabled>...</option>
			<option>Si</option>
			<option>No</option>
		</select>
		<br>
		<!-- * * * -->
		<p><b class="text-info">Detalles de tu cuenta:</b></p>
		<label class="form-label">Ingresa tu correo:</label>
		<input class="form-control" type="emal" name="email" placeholder="Alguien@Servicio.com" required>
		<!-- * * * -->
		<label class="form-label mt-2">Crea tu contraseña:</label>
		<input class="form-control" type="password" name="password" required>
		<!-- * Crear animacion de similitud * -->
		<label class="form-label mt-2">Confirma tu contraseña:</label>
		<input class="form-control" type="password" name="password">
		<!-- * * * -->
		<br>
		<p><b class="text-info">Metodo de recuperación:</b></p>
		<label class="form-label">Teléfono:</label>
		<input class="form-control" type="number" name="phone" max="10000000000" min="1" required>
		<p><span class="text-danger"><small>Por medio de tu número personal, podemos ayudarte a recuperar tu cuenta en caso de olvidar la contraseña.</small></span></p>
		<!-- * * * -->
		<input class="checkbox" type="checkbox" name="acetp-terms" required><span><small> Acepto los terminos de uso de Shapes3D.com</small></span><br>
		<input class="checkbox" type="checkbox" name="acetp-terms" required><span><small> He leído el <a href="#">manejo de datos</a></small></span>
		<!-- * * * -->
		<center><button class="btn btn-success btn-sm mt-2">Crear cuenta!</button></center>
	</form>

</div>
<!-- - - - - - -- - - - - - - - - - - - - - - -->
<?php require_once('partials/footer.php') ?>