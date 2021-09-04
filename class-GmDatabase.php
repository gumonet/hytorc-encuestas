<?php

class GMDatabase{

	private $conn = null;

	public function __construct() {

		$this->conn = mysqli_connect("mysql", "homestead", "secret", "homestead");

	}

	public function insertData() {

	}

	public function updateData() {

		mysqli_close( $this->conn );
	}
}