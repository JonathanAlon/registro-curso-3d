<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shapes3D | Sesión abierta</title>
	<!-- CSS Bootstrap -->
	<link rel="stylesheet" type="text/css" href="../../style/css/bootstrap.css">
	<!-- css.gg -->
	<link href="../../style/node_modules/css.gg/all.css' rel='stylesheet">
	<!-- JSDelivr -->
	<link href='https://cdn.jsdelivr.net/npm/css.gg/icons/all.css' rel='stylesheet'>
	<!-- Custom CSS -> Style.css -->
	<link rel="stylesheet" type="text/css" href="../styles/app.css">
</head>
<!-- -- -- -- -- -- -- -- -->
<body id="body">
<!-- -- -- -- -- -- -- -- -->
<header class="shadow">
		
		<a href="admin-participantes.php" title="Página principal" class="px-2">Cursos</a>
		<a href="products.php" title="Productos" class="p-1">Productos</a>
		<a href="quotation.php" title="Cotización" class="p-1">Cotizar</a>
		<a href="admin-system.php" title="Configuracion del sistema" class="p-1">Sistema</a>
</header>
<section id="space__alert" class="container">
	<?php if (isset($_SESSION['message'])){?>
			<div id="top__message" class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert" >
				<?= $_SESSION['message']; ?>
				<!--a href="#" class="btn btn-success btn-sm btn-close"></a-->
				<a id="btn__close" href="index.php" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
			</div>
		<?php } ?>
</section>
<!-- *** -->
<div class="menu__side">
	<div id="profile__user">		
		<i class="gg-user"></i><p id="text__menu" ><?php echo $_SESSION['userName']; ?></p>		
	</div>
	<!-- * -->
	<div id="navigation__menu">
		<center>
		<a href="admin-participantes.php" title="Página principal" class="selected py-3">
			<div>
				<i class="gg-userlane"></i><p>Curso</p>
			</div>
		</a>
		<a href="products.php" title="Productos" class="py-3">
			<div>
				<i class="gg-smart-home-cooker"></i><p>Productos</p>
			</div>
		</a>
		<a href="quotation.php" title="Cotización" class="py-3">
			<div>
				<i class="gg-loadbar-doc"></i><p>Cotizar</p>
			</div>
		</a>
		<a href="admin-system.php" title="Configuracion del sistema" class="py-3">
			<div>
				<i class="gg-bot"></i><p>Sistema</p>
			</div>
		</a>
		</center>
	</div>
</div>
<!-- -- -- -- -- -- -- -- -->