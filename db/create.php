<?php 
	/* - - - - - - - - - */
	include('config.php');
	/* - - - - - - - - - */
	print("It's Working");
	/* - - - - - - - - - */
	$metodoAction = (int)filter_var($_REQUEST['metodo'], FILTER_SANITIZE_NUMBER_INT);
	/* - - - - - - - - - */
	if ($metodoAction == 1) {
		
		$name 		= filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$lastname 	= filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
		$career 	= filter_var($_POST['career'], FILTER_SANITIZE_STRING);
		$grade  	= filter_var($_POST['grade'], FILTER_SANITIZE_STRING);
		$grupe  	= filter_var($_POST['grupe'], FILTER_SANITIZE_STRING);
		$phone 		= (int)filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
		$email 		= filter_var($_POST['email'], FILTER_SANITIZE_STRING);
		/* - - - - - - - - - */
		$insert = "INSERT INTO participante(
			name,
			lastname,
			career,
			grade,
			grupe,
			phone,
			email
		)VALUES(
			'$name',
			'$lastname',
			'$career',
			'$grade',
			'$grupe',
			'$phone',
			'$email'
		)";
		/*- - - - - - - - - - -*/
		$sql_insert = mysqli_query($conn, $insert);
		/*- - - - - - - - - - -*/
		$_SESSION['message'] = 'Se ha creado tu registro, los organizadores se pondrán en contacto contigo por los medios que has ingresado';
		$_SESSION['message_type'] = 'success';
		/*- - - - - - - - - - -*/
		header("Location:../registro.php");
	}
	/* - - - - - - - - - */
	if ($metodoAction == 2) {
		$name 		= filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$email 		= filter_var($_POST['email'], FILTER_SANITIZE_STRING);
		$message 	= filter_var($_POST['message'], FILTER_SANITIZE_STRING);
		/* - - - - - - - - - */
		$insert = "INSERT INTO comentarios(
			name,
			email,
			message
		)VALUES(
			'$name',
			'$email',
			'$message'
		)";
		/*- - - - - - - - - - -*/
		$sql_insert = mysqli_query($conn, $insert);
		/*- - - - - - - - - - -*/
		$_SESSION['message'] = 'Comentario agredado Exitosamente.';
		$_SESSION['message_type'] = 'success';
		/*- - - - - - - - - - -*/
		header("Location:../dudas.php");
	}
	/* - - - - - - - - - */
	if ($metodoAction == 3) {
		$answer 		= filter_var($_POST['answer'], FILTER_SANITIZE_STRING);
		$username 		= filter_var($_POST['username'], FILTER_SANITIZE_STRING);
		/* - - - - - - - - - */
		$insert = "INSERT INTO respuestas(
			answer,
			username
		)VALUES(
			'$answer',
			'$username'
		)";
		/*- - - - - - - - - - -*/
		$sql_insert = mysqli_query($conn, $insert);
		/*- - - - - - - - - - -*/
		$_SESSION['message'] = 'Respuesta agredada Exitosamente.';
		$_SESSION['message_type'] = 'success';
		/*- - - - - - - - - - -*/
		header("Location:../dudas.php");
	}
	/* - - - - - - - - - */
	if ($metodoAction == 4) {
		$userName = filter_var($_POST['userName']);
		$lastName = filter_var($_POST['lastName']);
		$i_am 	  = filter_var($_POST['i_am']);
		$email 	  = filter_var($_POST['email']);
		$password = filter_var($_POST['password']);
		$phone 	  = filter_var($_POST['phone']);
		/*- - - - - - - - - - -*/
		$insert = "INSERT INTO users(
			userName,
			lastName,
			i_am,
			email,
			password,
			phone
		)VALUES(
			'$userName',
			'$lastName',
			'$i_am',
			'$email',
			'$password',
			'$phone'
		)";
		/*- - - - - - - - - - -*/
		$sql_insert = mysqli_query($conn, $insert);
		/*- - - - - - - - - - -*/
		$_SESSION['message'] = 'Se ha creado tu cuenta exitosamente, ya puedes iniciar sesión.';
		$_SESSION['message_type'] = 'success';
		/*- - - - - - - - - - -*/
		header("Location:../login/login.php");
	}

?>