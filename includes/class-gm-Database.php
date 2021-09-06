<?php

class GMDatabase{

	private $conn = null;

	public function __construct () {

		$this->conn = $this->get_con();

	}

	public function get_con(){
		return mysqli_connect("hytorc-mysql", "homestead", "secret", "homestead");
	}

	public  function save_register( $array_data ) {
		unset( $array_data['action'] );

		$date = explode('/', $array_data['date'] );

		$query = "INSERT INTO registros ( cliente_id, nombre, rep_ventas, correo_electronico, date, tipo_encuesta, id_factura, fecha_registro ) " .
			" VALUES ( " .
			" ' " . $array_data['cliente_id'] . " ', ".
			" ' " . $array_data['nombre'] . " ', ".
			" ' " . $array_data['rep_ventas'] . " ', ".
			" ' " . $array_data['correo_electronico'] . " ', ".
			" ' " . $date[2] . '-' . $date[1] . '-' . $date[0] . " ', ".
			" '". $array_data['tipo_encuesta'] ."', ".
			" ' " . $array_data['id_factura'] . " ', now() ".
		" )";

		return $this->processQuery( $query );
		//return array( 'keys' => implode( ',', $keys ), 'values' => implode( ',', $values) );
	}

	public function update_register( $array_data ) {
		$id = $array_data['id'];

		unset( $array_data['action'] );
		unset( $array_data['id'] );

		$query = "UPDATE registros SET ";
		$cont = 1;
		foreach ( $array_data as $key => $data ) {
			$query .= " " . $key . " = '" . $data ;
			$query .=  ( $cont === count( $array_data ) ) ? "' " : "', ";
			$cont++;
		}

		$query .= " where id = " . $id;

		return $this->processQuery( $query );

	}

	public function getEmail( $id_encuesta ){
		$con = $this->get_con();
		$results = $con->query( " SELECT correo_electronico, nombre FROM registros WHERE id = " . $id_encuesta );
		if ( $results->num_rows > 0 ) {
			$row = mysqli_fetch_assoc($results);
			mysqli_close( $con );
			return array( 'email' => $row['correo_electronico'], 'nombre' => $row['nombre']);
		}
		return false;
	}

	private function processQuery( $query ) {

		$transaction_query = mysqli_query( $this->conn, $query );
		$transaction_id = ( $transaction_query ) ? mysqli_insert_id( $this->conn )  : false;
		mysqli_close( $this->conn );
		return $transaction_id;

	}


	private function updateData() {

		mysqli_close( $this->conn );
	}
}