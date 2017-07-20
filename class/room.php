<?php

class room {

	///database credentials
	public $host;
	public $username;
	public $password;
	public $database;

	public function __construct() {
	  $this->host = $_SERVER['DB_HOST'];
	  $this->username = $_SERVER['DB_USER'];
	  $this->password = $_SERVER['DB_PASS'];
	  $this->database = $_SERVER['DB_DB'];
	}

	private $roomList;

	public function getRoomList() {
		return $this->roomList;
	}

	public function roomList() {

	$connection = mysqli_connect($this->host,$this->username,$this->password,$this->database);      

	$result = mysqli_query($connection, " SELECT Description FROM room ORDER BY Description ASC ") or die("Query fail: " . mysqli_error()); 

		while($row = mysqli_fetch_array($result))
		{
			$this->roomList[] = $row['Description'];
		}

	}

}