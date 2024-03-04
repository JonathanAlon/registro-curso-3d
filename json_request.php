<?php 
	include('db/config.php');
	/* *** ** *** ** *** ** *** ** *** ** *** ** *** */
	//$email = $_POST['email'];
	//$password = $_POST['password'];
	/* - - - - - - - - - */
	$search = "SELECT * FROM users WHERE userName = 'Jonathan' AND lastName = 'Ojeda'";
	$match = mysqli_query($conn, $search);
	/* - - - - - - - - - */
	$rows = mysqli_num_rows($match);
	$details = mysqli_fetch_array($match);
	
	$json = json_encode($details);
	$json_pretty = json_encode(json_decode($json), JSON_PRETTY_PRINT);
	
	//die();
	/* - - - - - - - - - */
	
	//print($rows);
	/* *** ** *** ** *** ** *** ** *** ** *** ** *** */
	if ($json_pretty == null) {
		echo 'Sin Resultados';
	}else{
		header('Content-Type: application/json');
		print($json_pretty);
	}
?>