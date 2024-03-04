<?php include('../../db/config.php'); ?>
<?php require_once('../partials/app.php') ?>
<!-- - - - - - -- - - - - - - - - - - - - - - -->
<div class="container">
	<p>Borrar datos de la tabla:</p>
	<center>
		<form method="POST" action="../../db/db_actions.php">
			<input type="number" name="metodo" value="1" hidden>
			<button class="btn btn-outline-danger btn-sm mt-1 mb-2 shadow" >'participantes'</button>
		</form>
		<!-- ***-->
		<form method="POST" action="db/db_actions.php">
			<input type="number" name="metodo" value="2" hidden>
			<button class="btn btn-outline-danger btn-sm mt-1 mb-3 shadow">'comentarios'</button>
		</form>
	</center>
	<hr>
	<center>
		<form>
			<input type="number" name="metodo" value="3" hidden>
			<button class="btn btn-outline-warning btn-sm shadow">Cerrar mi sesión!</button>
		</form>
	</center>
</div>
<!-- - - - - - -- - - - - - - - - - - - - - - -->
<?php require_once('../partials/footer.php') ?>