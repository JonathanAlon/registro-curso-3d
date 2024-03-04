<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test Form Email</title>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<center>
		<form method="POST" action="phpMailer.php">
			<label>Asunto:</label><br>
			<input type="text" name="asunto"><br>
			<label>Conteido:</label><br>
			<input type="text" name="contenido"><br>
			<label>Para:</label><br>
			<input type="text" name="para"><br>
			<br>
			<button>Enviar</button>
		</form>
	</center>
</body>
</html>