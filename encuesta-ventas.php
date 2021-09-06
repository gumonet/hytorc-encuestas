<?php
	if ( ! isset( $_GET['survey'] ) ) {
		echo '<h1>No se especificó la encuesta</h1>';
		die();
	}
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>HYTORC | Encuesta de satisfacción Ventas</title>
	<link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
	<header>
		<img src="./assets/img/header-ventas.jpg" class="w-100" alt="">
	</header>
	<div class="main-content my-4">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p>En Comercializadora del Istmo deseamos mejorar e incrementar la calidad de los servicios que le proporcionamos, por lo que le pedimos
						contestar las siguientes preguntas, para así contar con información objetiva y lograr nuestra mejora continua y su satisfacción.</p>
				</div>
			</div>
			<form action="process-request.php" method="post" class="form-survey">
				<input type="hidden" value="<?php echo $_GET['survey']; ?>" name="id" >
				<input type="hidden" value="update_register" name="action">
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<p>¿Los equipos suministrados estuvieron de acuerdo con las especificaciones técnicas acordadas?</p>
							<div class="content-radios">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p1" id="ventas_excelente_p1" value="excelente">
									<label class="form-check-label" for="ventas_excelente_p1">
										Excelente
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p1" id="ventas_muy_bien_p1" value="muy-bien">
									<label class="form-check-label" for="ventas_muy_bien_p1">
										Muy bien
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p1" id="ventas_bien_p1" value="bien">
									<label class="form-check-label" for="ventas_bien_p1">
										Bien
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p1" id="ventas_mal_p1" value="mal">
									<label class="form-check-label" for="ventas_mal_p1">
										Mal
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<p>¿Los precios permanecieron fijos durante la vigencia del contrato o acuerdo?</p>
							<div class="content-radios">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p2" id="ventas_excelente_p2" value="excelente">
									<label class="form-check-label" for="ventas_excelente_p2">
										Excelente
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p2" id="ventas_muy_bien_p2" value="muy-bien">
									<label class="form-check-label" for="ventas_muy_bien_p2">
										Muy bien
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p2" id="ventas_bien_p2" value="bien">
									<label class="form-check-label" for="ventas_bien_p2">
										Bien
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p2" id="ventas_mal_p2" value="mal">
									<label class="form-check-label" for="ventas_mal_p2">
										Mal
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<p>¿Los equipos se suministraron en el plazo acordado?</p>
							<div class="content-radios">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p3" id="ventas_excelente_p3" value="excelente">
									<label class="form-check-label" for="ventas_excelente_p3">
										Excelente
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p3" id="ventas_muy_bien_p3" value="muy-bien">
									<label class="form-check-label" for="ventas_muy_bien_p3">
										Muy bien
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p3" id="ventas_bien_p3" value="bien">
									<label class="form-check-label" for="ventas_bien_p3">
										Bien
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p3" id="ventas_mal_p3" value="mal">
									<label class="form-check-label" for="ventas_mal_p3">
										Mal
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<p>¿Los equipos se suministraron en el lugar de entrega o ubicación solicitada?</p>
							<div class="content-radios">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p4" id="ventas_excelente_p4" value="excelente">
									<label class="form-check-label" for="ventas_excelente_p4">
										Excelente
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p4" id="ventas_muy_bien_p4" value="muy-bien">
									<label class="form-check-label" for="ventas_muy_bien_p4">
										Muy bien
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p4" id="ventas_bien_p4" value="bien">
									<label class="form-check-label" for="ventas_bien_p4">
										Bien
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p4" id="ventas_mal_p4" value="mal">
									<label class="form-check-label" for="ventas_mal_p4">
										Mal
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<p>¿La documentación entregada por el personal de COISA fue la requerida?</p>
							<div class="content-radios">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p5" id="ventas_excelente_p5" value="excelente">
									<label class="form-check-label" for="ventas_excelente_p5">
										Excelente
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p5" id="ventas_muy_bien_p5" value="muy-bien">
									<label class="form-check-label" for="ventas_muy_bien_p5">
										Muy bien
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p5" id="ventas_bien_p5" value="bien">
									<label class="form-check-label" for="ventas_bien_p5">
										Bien
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p5" id="ventas_mal_p5" value="mal">
									<label class="form-check-label" for="ventas_mal_p5">
										Mal
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<p>¿COISA se comprometió a asegurar y proteger los equipos contra algún riesgo, ante, durante y después
								de la operación o entrega?</p>
							<div class="content-radios">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p6" id="ventas_excelente_p6" value="excelente">
									<label class="form-check-label" for="ventas_excelente_p6">
										Excelente
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p6" id="ventas_muy_bien_p6" value="muy-bien">
									<label class="form-check-label" for="ventas_muy_bien_p6">
										Muy bien
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p6" id="ventas_bien_p6" value="bien">
									<label class="form-check-label" for="ventas_bien_p6">
										Bien
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p6" id="ventas_mal_p6" value="mal">
									<label class="form-check-label" for="ventas_mal_p6">
										Mal
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<p>¿Está satisfecho con el servicio proporcionado por COISA en los equipos HYTORC?</p>
							<div class="content-radios">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p7" id="ventas_excelente_p7" value="excelente">
									<label class="form-check-label" for="ventas_excelente_p7">
										Excelente
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p7" id="ventas_muy_bien_p7" value="muy-bien">
									<label class="form-check-label" for="ventas_muy_bien_p7">
										Muy bien
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p7" id="ventas_bien_p7" value="bien">
									<label class="form-check-label" for="ventas_bien_p7">
										Bien
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p7" id="ventas_mal_p7" value="mal">
									<label class="form-check-label" for="ventas_mal_p7">
										Mal
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<p>¿El representante de Ventas atiende con prontitud mis necesidades?</p>
							<div class="content-radios">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p8" id="ventas_excelente_p8" value="excelente">
									<label class="form-check-label" for="ventas_excelente_p8">
										Excelente
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p8" id="ventas_muy_bien_p8" value="muy-bien">
									<label class="form-check-label" for="ventas_muy_bien_p8">
										Muy bien
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p8" id="ventas_bien_p8" value="bien">
									<label class="form-check-label" for="ventas_bien_p8">
										Bien
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ventas_p8" id="ventas_mal_p8" value="mal">
									<label class="form-check-label" for="ventas_mal_p8">
										Mal
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col text-center">
						<button class="btn btn-primary btn-lg"> Enviar </button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="social-icons">
						<ul>
							<li><a href="#"> <img src="./assets/img/worldwide.png" alt=""> </a> </li>
							<li><a href="#"> <img src="./assets/img/facebook-logo.png" alt=""> </a> </li>
							<li><a href="#"> <img src="./assets/img/instagram.png" alt=""> </a> </li>
							<li><a href="#"> <img src="./assets/img/linkedin.png" alt=""> </a> </li>
							<li><a href="#"> <img src="./assets/img/twitter.png" alt=""> </a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>