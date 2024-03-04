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
		<h1>Curso: Modelado 3D para impresiones</h1>
		<h4>* * * Cupo limitado * * *</h4>
	<a class="btn btn-sm btn-success" href="registro.php">REGISTRATE YA!</a>
	</section>
	<section id="hero-logo-shapes">
		<img class="rounded-circle shadow" src="img/MT.png">
	</section>	
</section>
<div id="principal" class="container mt-3 py-5">
	<hr>
	<section id="descripcion-curso">
		<div class="contenedor">
			<div class="imagen"></div>
			<div class="texto">
				<h2>Descripción del curso</h2>
				<p>Este curso está enfocado en el aprendizaje mediante la práctica en el modelado 3D, donde iniciaremos con una pequeña introducción en lo que es y que significa el modelado 3D y posteriormente realizaremos una práctica básica pero exhaustiva para entender cómo funciona un programa de diseño de objetos 3D a nivel profesional y cómo podemos llevar a cabo su impresión.</p>
				<a class="btn btn-sm btn-success" href="cursos.php">Conocer más sobre el curso</a>
			</div>
		</div>
	</section>
</div>
<section id="temas">
	<div class="container mt-3">
		<div class="contenedor">
			<h2>Temas para el curso:</h2>
			<hr>
			<div class="programas">
				<div class="carta">
					<h3>Uso de Inkscapepe</h3>
					<img id="img-curso-cura" src="img/logo_inkscape.jpg" class="rounded-circle">
				</div>
				<div class="carta">
					<h3>Uso de Blender</h3>
					<img id="img-curso-cura" src="img/logo_blender.jpg" class="rounded-circle">
				</div>
				<div class="carta">
					<h3>Uso de Ultimaker Cura</h3>
					<img id="img-curso-cura" src="img/logo_cura.png" class="rounded-circle">
				</div>
			</div>
		</div>
	</div>
</section>
<div class="container mt-3">
	<section id="requisitos">
		<h2>Requisitos y aptitudes para este curso</h2>
		<div class="row">
			<div class="col-md-3 card shadow seccion">
				<img src="img/img4.jpg" class="img-fluid">
				<h3>Uso básico de una computadora</h3>
			</div>
			<div class="col-md-3 card shadow seccion">
				<img src="img/img5.jpg" class="img-fluid">
				<h3>Ganas de aprender</h3>
			</div>
			<div class="col-md-3 card shadow seccion">
				<img src="img/img6.jpg" class="img-fluid">
				<h3>Ser creativo</h3>
			</div>
		</div>
	</section>
</div>
<section id="boton-registro">
	<div id="ajustes" class="container mt-3 contenedor">
		<h2>Regístrate <br> ahora!</h2>
		<h4>* * * Cupo limitado * * *</h4>
		<a class="btn btn-sm btn-success" href="">Llenar el registro</a>
	</div>
</section>
<!--*************************************-->
<?php require_once('partials/footer.php') ?>