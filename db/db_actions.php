<?php 
	/* - - - - - - - - - */
	include('config.php');
	/* - - - - - - - - - */
	print("It's Working<br>");
	/* - - - - - - - - - */
	$metodoAction = (int)filter_var($_REQUEST['metodo'], FILTER_SANITIZE_NUMBER_INT);
	/* - - - - - - - - - */
	if ($metodoAction == 1 ) {
		$deleteData = "DELETE FROM participante WHERE idparticipante > 0";
		$resetTable = mysqli_query($conn, $deleteData);
		/*- - - - - - - - - - -*/
		$_SESSION['message'] = 'Se han borrado los datos de la tabla participantes';
		$_SESSION['message_type'] = 'warning';
		/*- - - - - - - - - - -*/
		header("Location:../login/views/admin-participantes.php");
	}
	/* - - - - - - - - - */
	if ($metodoAction == 2 ) {
		$deleteDataCommits = "DELETE FROM comentarios WHERE idcommit > 0";
		$resetTableCommits = mysqli_query($conn, $deleteDataCommits);
		/*- - - - - - - - - - -*/
		$deleteDataAnswers = "DELETE FROM respuestas WHERE idcommit > 0";
		$resetTableAnswers = mysqli_query($conn, $deleteDataAnswers);
		/*- - - - - - - - - - -*/
		$_SESSION['message'] = 'Se han borrado los datos de la tabla comentarios <a href="dudas.php">ver sección comentarios</a>';
		$_SESSION['message_type'] = 'warning';
		/*- - - - - - - - - - -*/
		header("Location:../vista_admin.php");
	}
	/* - - - - - - - - - */
	if ($metodoAction == 3) {		
		$email = $_POST['email'];
		$password = $_POST['password'];
		/* - - - - - - - - - */
		$search = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
		$match = mysqli_query($conn, $search);
		/* - - - - - - - - - */
		$rows = mysqli_num_rows($match);
		if ($rows) {
			$acount = mysqli_fetch_array($match);
			/* - - - - - - - - - -*/
			$_SESSION['userName'] = $acount['userName'];
			$_SESSION['lastName'] = $acount['lastName'];
			$_SESSION['i_am'] 	  = $acount['i_am'];
			$_SESSION['email'] 	  = $acount['email'];
			$_SESSION['phone'] 	  = $acount['phone'];
			/* - - - - - - - - - -*/
			$_SESSION['message'] = 'Bienvenid@ '.$_SESSION['userName'];
			$_SESSION['message_type'] = 'info';
			/* - - - - - - - - - -*/
			header('Location:../login/views/admin-participantes.php');
		}else{
			$_SESSION['message'] = 'Correo o contraseña desconocidos!';
			$_SESSION['message_type'] = 'warning';
			header('Location:../login/login.php');
		}
		/* - - - - - - - - - */
		mysqli_free_result($match);
		mysqli_close($conn);
	}

?>