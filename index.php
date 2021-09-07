<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>HYTORC | Encuesta de Satisfacción</title>
	<link rel="stylesheet" href="./assets/css/main.css">
	<link rel="stylesheet" href="./assets/plugins/datepicker.css">
</head>
<body>
	<header>
		<img src="./assets/img/header-home.jpg" class="w-100" alt="">
	</header>
	<div class="main-content my-4">
		<div class="container">
			<div class="row">
				<div class="col-lg-2"></div>
				<?php
					$error = false;
					$registro = false;
					$respuesta_existente = false;
					if ( ! isset($_GET['encuesta']) ){
						$error = ' No se recibió el tipo de encuesta';
					} else{
						if( ! in_array( $_GET['encuesta'], [ 'ventas', 'renta-equipo', 'mantenimiento' ] )) {
							$error = ' El parametro encuesta es incorrecto, debería ser: ventas, renta-equipo, mantenimiento';
						}
					}
					if( false === $error ) {
						require_once 'includes/class-gm-Database.php';
						$db = new GMDatabase();
						$id_encuesta = null;
						$registro = $db->existe_encuesta( array(
								'tipo_encuesta'      => $_GET['encuesta'],
							    'correo_electronico' => $_GET['email'],
							    'id_factura'		 => $_GET['factura'],
						));
					}
				?>

				<div class="col-lg-4 form-home-content">
					<h2>Registrarse</h2>

					<div class="content-form">
						<?php
						if( $registro !== false ) { //encuesta-' . $tipo_encuesta . '.php?survey=' . $register_id
							if( $registro['estatus'] === 'iniciado' ) { ?>
								<h2>Encuesta en progreso.</h2>
								<p> Tiene una encuesta pendiente de finalizar <br> <a class="btn btn-primary" href="./encuesta-<?php echo $_GET['encuesta']; ?>.php?survey=<?php echo $registro['id']  ?>"> Continuar </a> </p>
							<?php } else { ?>
								<h2>Encuesta duplicada.</h2>
								<p> Se ha detectado una respuesta relacionada al email <strong> <?php echo $_GET['email']; ?> </strong> con el número de factura <strong><?php echo $_GET['factura']; ?></strong> </p>
							<?php }
						} else {
							?>
							<form action="process-request.php" method="post">
								<input type="hidden" name="action" value="save_register">
								<input type="hidden" name="cliente_id" value="<?php echo isset( $_GET['cliente_id'] ) ? $_GET['cliente_id'] : '';  ?>">
								<input type="hidden" name="id_factura" value="<?php echo $_GET['factura']; ?>">
								<input type="hidden" name="tipo_encuesta" value="<?php echo $_GET['encuesta']; ?>">
								<div class="form-group">
									<input type="text" required name="nombre" id="nombre" placeholder="Nombre del cliente" value="<?php echo isset( $_GET['nombre'] ) ? $_GET['nombre'] : '';  ?>" class="form-control">
								</div>
								<div class="form-group">
									<input type="text" required name="rep_ventas" id="rep_ventas" value="<?php echo isset( $_GET['rep-ventas'] ) ? $_GET['rep-ventas'] : '';  ?>" placeholder="Nombre del representante de ventas" class="form-control">
								</div>
								<div class="form-group">
									<input type="text" required name="correo_electronico" value="<?php echo isset( $_GET['email'] ) ? $_GET['email'] : '';  ?>" id="correo_electronico" placeholder="Correo electrónico" class="form-control">
								</div>
								<div class="form-group">
									<label for="date">Seleccionar fecha</label>
									<input type="text" name="date" id="date" required class="form-control">
								</div>
								<div class="form-group">

									<button type="submit" <?php echo ( $error !== false ) ? 'disabled' : ''; ?> class="form-control btn btn-primary"> Enviar </button>
								</div>
							</form>
						<?php } ?>
					</div>
				</div>
				<div class="col-lg-4 column-blue-form">

				</div>
				<div class="col-lg-2"></div>
			</div>
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
	<script src="./assets/plugins/datepicker-full.js"></script>
	<script src="./assets/plugins/es.js"></script>
<script>
    const elem = document.querySelector('input[name="date"]');
    const datepicker = new Datepicker(elem, {
        'autohide' : true,
	    'language' : 'es',
	    'todayBtn': true,
	    'todayHighlight': true,
    });
</script>
</body>
</html>