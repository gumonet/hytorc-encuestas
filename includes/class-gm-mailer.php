<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

class SendEmail {

	public static function send( $receptor ){
		$url_host = stripos($_SERVER['SERVER_PROTOCOL'],"https") === 0 ? "https://" : "http://" . $_SERVER['HTTP_HOST'];
		$mail = new PHPMailer(true);

		try {
			$mail->isSMTP();
			$mail->Host = 'mail.laboratorio-goobec.com ';
			$mail->SMTPAuth = true;
			$mail->Port = 587;
			$mail->Username = 'prueba@laboratorio-goobec.com';
			$mail->Password = '@Prueba2021';
			//Recipients
			$mail->setFrom('noreply@hytorc.com', 'Hytorc');
			$mail->addAddress($receptor['email'], $receptor['nombre']);     //Add a recipient

			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = 'Gracias por tu respuesta';
			$mail->Body    = '
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>HYTORC | Encuesta de satisfacción</title>
</head>
<body>
<table border="0" style="border: none; width: 100%" width="100%">
	<tr>
		<td valign="center" align="center" style="text-align: center">
			<table style="max-width: 700px; width: 100%; text-align: center" width="100%" align="center">
				<tr>
					<td>
						<img src="' . $url_host . '/assets/img/header-home.jpg" style="width: 100%" class="w-100" alt="">
					</td>
				</tr>
				<tr>
					<td>
						<h1 style="text-align: center">GRACIAS POR TU RESPUESTA</h1>
				<p style="text-align: center;">En Comercializadora del Istmo deseamos mejorar e incrementar la calidad de los servicios que le proporcionamos, por lo que le pedimos
					contestar las siguientes preguntas, para así contar con información objetiva y lograr nuestra mejora continua y su satisfacción.</p>
						<p>
							<a href="#"> <img src="assets/img/boton.png" alt="" style="width: 200px; height: auto;"> </a>
						</p>
						<p>
							<a href="#"> <img src="assets/img/redes-sociales.png" alt="" style="width: 300px"> </a>
						</p>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</body>
</html>';
			$mail->AltBody = '¡Gracias! Tu respuesta nos ayudará a darte un mejor servicio';

			$mail->send();
		} catch (Exception $e) {

		}
	}

}