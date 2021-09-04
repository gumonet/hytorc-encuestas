<?php
require_once 'class-gm-Database.php';

$post = $_POST;

if( isset( $post['action'] ) ) {

	switch ( $post['action'] ) {
		case 'save_register':
			echo '<h1>HOME</h1>';
			break;
		case 'update_register':
			echo '<h1>Update register</h1>';
			GMDatabase::save_register( $post );
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