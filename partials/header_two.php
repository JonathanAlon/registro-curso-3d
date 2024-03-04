<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registros de participantes</title>
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">
	<style>
		#navigation {
			display: flex;
		}

		#link-navigation {
			display: flex;
			flex-direction: column;
		}

		#link-navigation li {
			text-decoration: none;
		}

		.contenedor {
			font-family: "Century Gothic";
		  position: relative;
		  display: inline-block;
		  text-align: center;
		  --bs-gutter-x: 1.5rem;
		  --bs-gutter-y: 0;
		  display: flex;
		  flex-wrap: wrap;
		  margin-top: calc(var(--bs-gutter-y) * -1);
		  margin-right: calc(var(--bs-gutter-x) * -.5);
		  margin-left: calc(var(--bs-gutter-x) * -.5);
		}

		.texto-encima{
		  position: absolute;
		  top: 10px;
		  left: 10px;
		}

		.centrado{
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  transform: translate(-50%, -50%);
		}

		#texto{
		font-size: 8vh;
		padding-bottom: 30px;
		}

		#hero{
			display: none;
		}

		#carta{
			padding: 20px;
		}

		#footer{
			display: none;
			margin: 0px;
		}

		img {
			display: flex;
			width: 240px;
		}

		@media(min-width: 760px){
			#hero{
				display: flex;
				background-image: url('img/img3.jpg');
				background-repeat: no-repeat;
				background-size: cover;
				border-radius: 15px;
				padding-top: 110px;
			}
		}
	</style>
</head>
<body>
	<nav class="navbar" id="navigation">
		<ul id="link-navigation">
			<li class="nav-link text-white">
				<a class="btn btn-sm " href="index.php">Regresar</a>
				<a class="btn btn-sm " href="login/login.php">Iniciar sesión</a>
			</li>
		</ul>
	</nav>