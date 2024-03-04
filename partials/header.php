<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso | Shapes3D</title>
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">
</head>
<style>
	/* Estilos para la vista index.php */
        .contenedor{
		max-width: 1400px; 
		margin: auto;
	}

	header{
		background-color: transparent;
	}

	#hero nav{
		display: flex;
		flex-direction: column;
		justify-content: top;
		text-align: center;
		padding-bottom: 25px;
		padding-top: 10px;
		color: white;
	}

	#hero{
		background-image:
		linear-gradient(
			0deg,
			rgb(0, 0, 0, 0.5),
			rgb(0, 0, 0, 0.5)
		),
		url('img/img1.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		box-shadow: 2px 2px 10px rgb(0, 0, 0, 0.9);
	}

	#hero #hero-text{
		display: flex;
		padding-top: 200px;
		align-items: center;
		justify-content: top;
		text-align: center;
		flex-direction: column;
		height: 90vh;
		color: white;		
	}

	#hero #hero-logo-shapes img{
		width: 200px;
		height: 200px;
	}

	#hero #hero-logo-shapes{
		display: flex;
		padding-bottom: 10px;
		justify-content: center;
	}

	#descripcion-curso .contenedor{
		text-align: center;
		padding: 200px 12px;
	}

	#temas{
		background-color: rgb(70, 70, 70);
		color: white;
		text-align: center;
	}

	#temas .contenedor{
		padding: 100px 0px;
	}

	#temas h2{
		margin-top: 0;
		font-size: 2.5em;
	}

	#temas p{
		display: none;
	}

	.carta:first-child{
		background-image: 
		linear-gradient(
			0deg,
			rgb(0,0,0,0.5),
			rgb(0,0,0,0.5)
		),
		url('img/img3.jpg');
	}

	.carta:nth-child(2){
		background-image: 
		linear-gradient(
			0deg,
			rgb(0,0,0,0.5),
			rgb(0,0,0,0.5)
		),
		url('img/log_b2.jpg');
	}

	.carta:nth-child(3){
		background-image: 
		linear-gradient(
			0deg,
			rgb(0,0,0,0.5),
			rgb(0,0,0,0.5)
		),
		url('img/img6.jpg');
	}

	#temas .carta{
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		padding: 50px;
		margin: 20px;
		border-radius: 15px;
	}

	#requisitos{
		align-items: center;
		padding: 250px 12px
	}

	#requisitos h2{
		justify-items: center;
		padding-bottom: 10px;
	}

	#requisitos .seccion{
		align-items: center;
		margin: 10px 0px;
	}

	#requisitos .row h3{
		justify-content: center;
		padding: 15px 0px;
	}

	#requisitos img{
		border-radius: 0px 0px 15px 15px;
	}

	#boton-registro{
		background-color: rgb(30, 30, 30);
	}

	#boton-registro #ajustes{
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		color: white;
		height: 80vh;
	}

	#boton-registro h2{
		font-size: 9vh;
	}

    @media (min-width: 720px){
		header{
			position: fixed;
			width: 100%;
		}

		header .contenedor{
			display: flex;
			flex-direction: row;
			align-items: left;
			justify-content: left;
			background-color: rgb(90, 90, 90, 0.4);
		}

		header nav{			
			flex-direction: row;
			padding-bottom: 0px;			
		}

		#hero-text h1{
			font-size: 12vh;
		}

		#hero-text a{
			font-size: 3vh;
			padding: 12px;
		}

		#descripcion-curso .contenedor{
			display: flex;
			justify-content: center;
		}

		#descripcion-curso .texto{
			width: 50%;
			max-width: 600px;
			text-align: initial;
			padding: 0px 30px;
			display: flex;
			flex-direction: column;
			justify-content: center;
		}

		#descripcion-curso .imagen{
			background-image: 
			url('img/img2.jpg');
			background-size: cover;
			background-position: center center;
			height: 500px;
			width: 400px;
			background-repeat: no-repeat;
			border-radius: 15px;
		}

		.carta:first-child{
		background-image: 
		linear-gradient(
			0deg,
			rgb(0,0,0,0.7),
			rgb(0,0,0,0.7)
		),
		url('img/img3.jpg');
		}

		.carta:nth-child(2){
			background-image: 
			linear-gradient(
				0deg,
				rgb(0,0,0,0.7),
				rgb(0,0,0,0.7)
			),
			url('img/log_b2.jpg');
		}

		.carta:nth-child(3){
			background-image: 
			linear-gradient(
				0deg,
				rgb(0,0,0,0.7),
				rgb(0,0,0,0.7)
			),
			url('img/img6.jpg');
		}

		#temas .carta{
			box-shadow: 2px 2px 10px rgb(0, 0, 0, 0.5);
		}

		#temas .programas{
			display: flex;
			justify-content: center;
		}

		#temas p{
			display: block;
			margin-bottom: 30px;
		}

		#requisitos{
			display: flex;
			flex-direction: column;
			align-items: center;			
		}

		#requisitos .row{
			justify-content: center;
		}

		#requisitos .seccion{
			display: flex;
			margin: 10px;
		}

		#boton-registro h2{
			font-size: 8em;
		}

		#boton-registro a{
			font-size: 3vh;
			padding: 15px;
		}
	}
	/* Fin de estilos para la vista index.php */
	/* Estilos para la vista cursos.php */
	#img-curso{
		margin-top: -100px;
		margin-bottom: 50px;
		width: 200px;
		height: 200px;
	}
	#sub-especificaciones{
		margin-top: 100px;
	}
	#cursos-hero{
		display: flex;
		background-color: rgb(0, 0, 0,0.5);
		margin-top: 200px;
		margin-bottom: 50px;
		padding-top: 60px;
		padding-bottom: 60px;
		color: white;
		justify-content: center;
		justify-items: center;

	}
	#cursos-hero-dos{
		display: flex;
		align-items: center;
		
	}
	#img-curso-cura{
		width: 133px;
		height: 132px;
	}
	#img-curso-cura-arrow-down{
		width: 75px;
		height: 75px;
	}
	#text-decripcion-programa{
		display: none;
	}
	/*  Cambio  */
	@media (min-width: 720px){
		#img-curso{
			margin-top: -150px;
			margin-bottom: 50px;
			width: 300px;
			height: 300px;
		}
		#sub-INSCRIBETE{
			justify-content: flex-start;
		}
		#btn-inscribirme{
			display: flex;
			justify-content: end;
		}
		#cursos-hero-dos{
			display: flex;
			flex-direction: column;
		}
		#img-curso-cura{
			margin-bottom: 2px;
			width: 200px;
			height: 200px;
		}
		#software-descripcion{
			display: flex;
			align-content: center;
		}
		#text-decripcion-programa{
			display: flex;
			flex-direction: column;
		}
	}
	/* Fin de estilos para la vista cursos.php */
	/* Inicio de estilos para la vista dudas.php */
	#dudas-hero{
		display: flex;
		background-color: rgb(0, 0, 0,0.5);
		margin-top: 100px;
		margin-bottom: 50px;
		padding-top: 60px;
		padding-bottom: 60px;
		color: white;
		justify-content: center;
		justify-items: center;
	}
	#redes-logos{
		display: flex;
		flex-direction: inline;
	}
	#img-redes{
		width: 75px;
		height: 75px;
	}
	/* Fin de estilos para la vista dudas.php */
	/* Inicio de estilos para la vista nosotros.php */
	#hero-dudas {
		background-image: url(img/wall.jpg);
		background-size: cover;
		background-position: center center;
		background-repeat: no-repeat;
		border-radius: 15px;
	}

	#espaciado {
		padding-top: 75px;
	}

	#nosotros-logo-sahpes3d{
		margin-top: 100px;
		margin-bottom: 10px;
		width: 250px;
		height: 250px;
	}
	#shapes-text {
		padding-top: 50px;
		padding-left: 10px;
		padding-right: 10px;
		flex-direction: column;
	}
	/*****/
	@media (min-width: 720px){
		#nosotros-hero{
			display: flex;
		}

		#shapes-text {
			display: flex;
			padding-left: 10px;
			padding-right: 10px;
		}
	}
	/* Fin de estilos para la vista nosotros.php */
    *{
		font-family: 'Century Gothic';
	}
    </style>
<body class="letra">