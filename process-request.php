<?php
require_once './includes/class-gm-Database.php';
require_once './includes/class-gm-mailer.php';

$post = $_POST;

if( isset( $post['action'] ) ) {
	$controller = new GMDatabase();

	switch ( $post['action'] ) {
		case 'save_register':
			$register_id = $controller->save_register( $post );
			if ( $register_id !== false ){
				//obtener tipo de encuestas
				header('Location: encuesta-ventas.php?survey=' . $register_id);
			} else {
				echo '<h1>Ocurrio un error al almacenar el registro</h1>';
			}
			break;
		case 'update_register':
			$register_id = 7; //$controller->update_register( $post );
			if ( $register_id  !== false ) {
				$receptor = $controller->getEmail( $register_id );
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