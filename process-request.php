<?php
require_once './includes/class-gm-Database.php';
require_once './includes/class-gm-mailer.php';

$post = $_POST;

if( isset( $post['action'] ) ) {
	$controller = new GMDatabase();

	switch ( $post['action'] ) {
		case 'save_register':
			//Validar que la factura, no esté registrada
			$tipo_encuesta = $_POST['tipo_encuesta'];
			$register_id = $controller->save_register( $post );
			if ( $register_id !== false ){
				//obtener tipo de encuestas
				header('Location: encuesta-' . $tipo_encuesta . '.php?survey=' . $register_id);
			} else {
				echo '<h1>Ocurrio un error al almacenar el registro</h1>';
			}
			break;
		case 'update_register':
			$surver_id = $_POST['id'];
			$transaction = $controller->update_register( $post );
			if ( $transaction  !== false ) {
				$receptor = $controller->getEmail( $surver_id );
				if ( $receptor !== false) {
					SendEmail::send( $receptor );
				}
				header( 'Location: gracias.php' );
			} else{
				echo '<h1>Ocurrio un error al almacenar el registro</h1>';
			}
			break;
	}

}