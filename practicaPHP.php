<?php require_once('partials/header.php') ?>
<!--*************************************-->
<div class="container mt-4">
	<center><h1>Practicas de PHP</h1></center>
	<br>
	<h5>Practica #1</h5>
	<div class="row">
		<div class="col-md-6">
			<hr>
			<h6>USANDO LA FUNCIÓN setlocale() y strtime()</h6>
			<?php 
				setlocale(LC_ALL, "spanish");
				echo "El dia de la semana es: ".strftime("%A");	
			?>
		</div>
		<div class="col-md-6">
			<hr>
			<h6>Usando la función date() en el idioma Español</h6>
			<?php 
				$date = date('D');
				if ($date == 'Mon') {
					$dia = "El dia de la semana es: Lunes";
					echo $dia;
				}if ($date == 'Tue') {
					$dia = "El dia de la semana es: Martes";
					echo $dia;
				}if ($date == 'Wed') {
					$dia = "El dia de la semana es: Miercoles";
					echo $dia;
				}if ($date == 'Thu') {
					$dia = "El dia de la semana es: Jueves";
					echo $dia;
				}if ($date == 'Fri') {
					$dia = "El dia de la semana es: Viernes";
					echo $dia;
				}if ($date == 'Sat') {
					$dia = "El dia de la semana es: Sábado";
					echo $dia;
				}if ($date == 'Mon') {
					$dia = "El dia de la semana es: Domingo";
					echo $dia;
				}
			?>
		</div>
	</div>
	<br><br><br><br>
	<h5>Practica #2</h5>
	<hr>
	<div class="row">
		<div class="col-md-6">
			<form method="POST" action="practicaPHP.php">
				<input type="number" name="importe" class="form-control" placeholder="ingresa el total de compra" required>
				<center><br><button class="btn btn-warning btn-sm">Evaluar!!</button></center>
			</form>
		</div>
		<div class="col-md-6">
			<?php 
				if (isset($_POST['importe'])) {
					$importe = $_POST['importe'];
					if ($importe < 30) {
						echo "<b><center>Compra más o te cobraremos los abusivos 30 pesos de gastos de envío</center></b>";
					}if ($importe >= 30 && $importe < 90) {
						$restante = 90 - $importe;
						echo "<b><center>'¡¡¡Con solo $".$restante." más podrás tener gastos de envío gratis!!!'</center></b>";
					}if ($importe >= 90) {
						echo "<b><center>Sí sí sí! Gastos de envío incluidos ¡Vuelve pronto!'</center></b>";
					}
				}
			?>
		</div>
	</div>
	<br><br><br><br>
	<h5>Practica #3</h5>
	<hr>
	<br><br><br><br>
	<h5>Practica #4</h5>
	<hr>
	<br><br><br><br>
	<h5>Practica #5</h5>
	<hr>
</div>
<!--*************************************-->
<?php require_once('partials/footer.php') ?>