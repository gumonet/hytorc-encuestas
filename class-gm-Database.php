<?php

class GMDatabase{

	private $conn = null;

	public function __construct () {

		$this->conn = mysqli_connect("hytorc-mysql", "homestead", "secret", "homestead");

	}

	public  function save_register( $array_data ) {
		unset( $array_data['action'] );

		$date = explode('/', $array_data['date'] );

		$query = "INSERT INTO registros ( cliente_id, nombre, rep_ventas, correo_electronico, date, tipo_encuesta, id_factura ) " .
			" VALUES ( " .
			" ' " . $array_data['cliente_id'] . " ', ".
			" ' " . $array_data['nombre'] . " ', ".
			" ' " . $array_data['rep_ventas'] . " ', ".
			" ' " . $array_data['correo_electronico'] . " ', ".
			" ' " . $date[2] . '-' . $date[1] . '-' . $date[0] . " ', ".
			" '', ".
			" ' " . $array_data['id_factura'] . " ' ".
		" )";

		return $this->insertData( $query );
		//return array( 'keys' => implode( ',', $keys ), 'values' => implode( ',', $values) );
	}

	public static function update_register( $array_data ) {
		unset( $array_data['action'] );
		$keys   = [];
		$values = [];
		foreach ( $array_data as $key => $data ) {
			if ( $key !== 'id' ) {
				$keys[]  = $key;
				$values[] = $data;
			}
		}
		$query_insert = "INSERT INTO registros ( " . implode( ',', $keys ) . " ) VALUES ( " . implode( '', $values ) . " )";

		echo $query_insert;
		//return array( 'keys' => implode( ',', $keys ), 'values' => implode( ',', $values) );
	}

	private function insertData( $query ) {

		$transaction = mysqli_query( $this->conn, $query );
		mysqli_close( $this->conn );

		return $transaction;

	}


	private function updateData() {

		mysqli_close( $this->conn );
	}
}