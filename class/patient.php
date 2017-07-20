<?php

class patient {
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

	public function getPatientByRoom($room) {

		$connection = mysqli_connect($this->host,$this->username,$this->password,$this->database);      

		$result = mysqli_query($connection, " SELECT pr.lastName,pr.firstName FROM patientRecord pr, registrationDetails rd WHERE pr.patientNo = rd.patientNo AND rd.type = 'IPD' AND rd.room = '$room' AND rd.dateUnregistered = '' ") or die("Query fail: " . mysqli_error()); 

			while($row = mysqli_fetch_array($result))
			{
				return $row['lastName'].', '.$row['firstName'];
			}

	}

	public function getRegistrationNoByRoom($room) {

		$connection = mysqli_connect($this->host,$this->username,$this->password,$this->database);      

		$result = mysqli_query($connection, " SELECT rd.registrationNo FROM registrationDetails rd WHERE rd.type = 'IPD' AND rd.room = '$room' AND rd.dateUnregistered = '' ") or die("Query fail: " . mysqli_error()); 

			while($row = mysqli_fetch_array($result))
			{
				return $row['registrationNo'];
			}
	}

	private $getChargesItemNo;

	public function getChargesItemNo() {
		return $this->getChargesItemNo;
	}

	public function getCharges($registrationNo) {
		$connection = mysqli_connect($this->host,$this->username,$this->password,$this->database);      

		$result = mysqli_query($connection, " SELECT itemNo FROM patientCharges WHERE registrationNo = '$registrationNo' AND status = 'UNPAID' ") or die("Query fail: " . mysqli_error()); 

			while($row = mysqli_fetch_array($result))
			{
				$this->getChargesItemNo[] = $row['itemNo'];
			}
	}

	private $getChargesByTitleItemNo;

	public function getChargesByTitleItemNo() {
		return $this->getChargesByTitleItemNo;
	}

	public function getChargesByTitle($registrationNo,$title) {

		$this->getChargesByTitleItemNo = [];

		$connection = mysqli_connect($this->host,$this->username,$this->password,$this->database);      

		$result = mysqli_query($connection, " SELECT itemNo FROM patientCharges WHERE registrationNo = '$registrationNo' AND status = 'UNPAID' AND title = '$title' ") or die("Query fail: " . mysqli_error()); 

			while($row = mysqli_fetch_array($result))
			{
				$this->getChargesByTitleItemNo[] = $row['itemNo'];
			}
	}

	public function searchPatient($search) {
		$connection = mysqli_connect($this->host,$this->username,$this->password,$this->database);      

		$result = mysqli_query($connection, " SELECT pr.completeName FROM registrationDetails rd ,patientRecord pr WHERE pr.completeName LIKE '$search%' AND pr.statusz NOT LIKE 'DELETED%' AND pr.patientNo = rd.patientNo AND rd.type = 'IPD' ") or die("Query fail: " . mysqli_error()); 

			while($row = mysqli_fetch_array($result))
			{
				echo $row['completeName']."\n";
			}		
	}

}