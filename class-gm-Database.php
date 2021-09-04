<?php

class GMDatabase{

	private $conn = null;

	public function init() {

		$this->conn = mysqli_connect("hytorc-mysql", "homestead", "secret", "homestead");

	}

	public static function save_register( $array_data ) {
		foreach ( $array_data as $key => $data ) {
			echo '<p> ' . $key .' = ' . $data . '</p>';
		}
	}

	private function insertData( $query ) {

		mysqli_query( $this->conn, $query );

	}

	private function updateData() {

		mysqli_close( $this->conn );
	}
}