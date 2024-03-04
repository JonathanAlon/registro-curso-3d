<?php 
	/*- - - - - - - - - - - - - - - - - - - - - */
	include('config.php');
	include('../vendor/phpmailer/phpmailer/src/PHPMailer.php');
	include('../vendor/phpmailer/phpmailer/src/SMTP.php');
	include('../vendor/phpmailer/phpmailer/src/Exception.php');
	/*- - - - - - - - - - - - - - - - - - - - - */
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	require '../vendor/autoload.php';
	/*- - - - - - - - - - - - - - - - - - - - - */
	try {
		$emailTo 	 =$_POST['correo'];
		$subject 	 ="AVISO DE REGISTRO";
		$bodyEmail 	 ="Hemos añadido tus datos a la lista de asistentes para el Curso de Modelaje de Objetos 3D para Impresion que se llevará a cabo en la Universidad Tecnológica del Poniente.<br> Gracias por tu apoyo.";
		/*- - - - - - - - - - - - - - - - - - - - - */
		$fromEmail   = "jo.ojeda.1995@gmail.com";
		$password 	 = "&&Jonathan&&";
		$fromName    = "TSU: Jonathan Ojeda";
		$host 	     = "smtp.gmail.com";
		$port 		 = "465";
		//$SMTPAuth	 = true;
		$SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
		/*- - - - - - - - - - - - - - - - - - - - - */
		$mail = new PHPMailer();
		/*- - - - - - - - - - - - - - - - - - - - - */
		$mail->isSMTP();		
		/*- - - - - - - - - - - - - - - - - - - - - */
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->Host 	 = $host;
		$mail->Port 	 = $port;
		$mail->SMTPAuth  = true;
		$mail->SMTPSecure= $SMTPSecure;
		$mail->Username  = $fromEmail;
		$mail->Password  = $password;
		/*- - - - - - - - - - - - - - - - - - - - - */
		$mail->setFrom($fromEmail, $fromName);
		$mail->addAddress($emailTo);
		$mail->isHTML(true);
		$mail->Subject = $subject;
		$mail->Body    = $bodyEmail;
		/*- - - - - - - - - - - - - - - - - - - - - */
		if (!$mail->send()) {
			error_log("MAILER: No pudo mandar el Correo!!");
		}else{
			$_SESSION['message'] = '<b>Correo enviado a: '.$emailTo." confirmando su asistencia al curso</b>";
			$_SESSION['message_type'] = 'success';
			header("Location: ../vista_admin.php");
		}
		/*- - - - - - - - - - - - - - - - - - - - - */
	} catch (Exception $e) {
		
	}
	/*- - - - - - - - - - - - - - - - - - - - - */
?>