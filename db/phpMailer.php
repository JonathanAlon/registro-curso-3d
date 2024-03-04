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
	/* - - - - - - - - - - - - - - - - - - - - - - - - - */
		try{
			/* Conteindo del correo */
			$asunto 	= $_POST['asunto'];
			$contenido  = $_POST['contenido'];
			$para 		= $_POST['para'];
			/* - - - - - - - - - - - - - - - - - - - - - */
			if (!filter_var($para, FILTER_VALIDATE_EMAIL)) {
				throw new Exception('Dirección de correo no válido');
			}
			/* - - - - - - - - - - - - - - - - - - - - - */
			/* Instancia de PHPMailer */
			$mail = new PHPMailer();
			/* Uso de un servidor (Gmail) */
			$mail->isSMTP();
			var_dump('funciona'); die();
			/* Habilitamos el debug (Muestra el proceso entre cliente y servidor)*/
			$mail->SMTPDebug = SMTP::DEBUG_SERVER;
			/* Configuraciones del Host para el servicio de Mail Server */
			$mail->Host = 'smt.gmail.com';
			$mail->Port = 465; // o 587
			/* Propiedad para establecer la seguridad de encriptación de comunicacion */
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			/* Activacion de autenticaciónSMTP del servidor */
			$mail->SMTPAuth = true;
			/* - - - - - - - - - - - - - -- - - - - - - */
			/* Credenciales de la cuenta */
			$email = 'jo.ojeda.1995@Gmail.com';
			$mail->Username = $mail;
			$mail->Password = '&&Jonathan&&';
			/* Quien envia el correo */
			$mail-> setFrom($email, 'Jonathan Ojeda');
			/*
				Si se requiere una direccion de respuesta
				$mail->addReplyTo($para, 'Daniel Chuc');
			*/
			/* Destinatario */
			$mail-> addAdress($para, 'Daniel Chuc');
			/* Asunto del correo */
			$mail->Subject = $asunto;
			/* Contenido del correo */
			$mail->IsHTML(true);
			$mail->CharSet = 'UTF-8';
			$mail->Body = sprintf('<h1> El mensaje es: </h1> <br> <p> %s </p>', $contenido);
			/* Texto alternativo */
			$mail->AltBody = 'Correo de prueba';
			/* Agregar algun adjunto */
			//mail->addAttachment(IMAGES_PATH.'logo.png');
			/* - - - - - - - - - - - - - -- - - - - - - */
			/* Enviar el correo */
			if (!$mail->send()) {
				throw new Exception($mail->ErrorInfo);
			}
			Flasher::success(sprintf('Mensaje enviado con exito a %s', $para));
			Redirect::back();
			/* - - - - - - - - - - - - - -- - - - - - - */
		}catch (Exception $e){
			//Flasher::error($e->getMessage());
			//Redirect::back();
		}
	
?>