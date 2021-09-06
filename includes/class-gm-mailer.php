<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

class SendEmail {

	public static function send( $receptor ){
		$url_host = stripos($_SERVER['SERVER_PROTOCOL'],"https") === 0 ? "https://" : "http://" . $_SERVER['HTTP_HOST'];
		$mail = new PHPMailer(true);

		try {
			$mail->isSMTP();
			$mail->Host = 'smtp.mailtrap.io';
			$mail->SMTPAuth = true;
			$mail->Port = 2525;
			$mail->Username = '476394cf8ad5d1';
			$mail->Password = 'bd669d8fb53b93';
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

<div class="main-content my-4">
	<table align="centet">
	<tr>
	<td>
	<img src="' . $url_host . '/assets/img/header-home.jpg" style="width: 100%" class="w-100" alt="">
</td>
</tr>
	<tr align="center" style="text-align: center; ">
	<td>
	<h1 style="text-align: center">GRACIAS POR TU RESPUESTA</h1>
				<p style="text-align: center;">En Comercializadora del Istmo deseamos mejorar e incrementar la calidad de los servicios que le proporcionamos, por lo que le pedimos
					contestar las siguientes preguntas, para así contar con información objetiva y lograr nuestra mejora continua y su satisfacción.</p>

</td>
	</tr>
</table>
</div>


</body>
</html>';
			$mail->AltBody = '¡Gracias! Tu respuesta nos ayudará a darte un mejor servicio';

			$mail->send();
		} catch (Exception $e) {

		}
	}

}