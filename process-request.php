<?php
require_once 'class-gm-Database.php';

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
			echo '<h1>Update register</h1>';
			//GMDatabase::update_register( $post );
			break;
	}

}
die();

/*$query = "INSERT INTO registros
(
`cliente_id`,
`nombre`,
`rep_ventas`,
`correo_electronico`) VALUES ( 'ID-234', 'ANGEL GUTIERREZ MONOLA', 'JOSE HERNANDEZ LOPEZ', 'angel@gumonet.com' )";

$db = new GMDatabase();
$db->insertData( $query );



echo json_encode( $post );*/