<?php
require "../../session/session.php";
require "../../class/database.php";
require "../../class/patient.php";

$registrationNo = $_POST['registrationNo'];

$db = new database();
$patient = new patient();

?>
<!DOCTYPE html>
<html>
	<head>
	  <meta charset="UTF-8">
	  <title></title>
	   <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
	   <script src="patient.js"></script>
	   <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
	   <link rel="stylesheet" href="patient.css">
	  <?php include '../navbar/navbar.php' ?>
	</head>
	<body>
		<div class="col-md-2">
			<div class="jumbotron">
				<div class="row">
					<div id="patientName" class="col-md-11 text-center">
						<h5>
							<?= 
								$db->selectNow('patientRecord','lastName','patientNo',$db->selectNow('registrationDetails','patientNo','registrationNo',$registrationNo))
								.', '.
								$db->selectNow('patientRecord','firstName','patientNo',$db->selectNow('registrationDetails','patientNo','registrationNo',$registrationNo))								
							?>
						</h5>
					</div>
				</div>
				<div id="patientMenu" class="row">
					<div class="col-md-12">
						<a href="#" id="information-menu" class="sidebar-menu">Information</a>
						<a href="#" id="charges-menu" class="sidebar-menu">Charges</a>
						<a href="#" id="doctor-menu" class="sidebar-menu">Doctor</a>
						<a href="#" id="laboratory-menu" class="sidebar-menu">Laboratory</a>
						<a href="#" id="ultrasound-menu" class="sidebar-menu">Ultrasound</a>
						<a href="#" id="xray-menu" class="sidebar-menu">X-Ray</a>
						<a href="#" id="medicine-menu" class="sidebar-menu">Medicine</a>
						<a href="#" id="supplies-menu" class="sidebar-menu">Supplies</a>
						<a href="#" id="soa-menu" class="sidebar-menu">S.O.A</a>
						<a href="#" id="cart-menu" class="sidebar-menu">Charges Cart</a>
					</div>
				</div>			
			</div>
		</div>
		<div class="col-md-10">
			
			<div id="information" class="col-md-12">
				<?php include 'information.php' ?>
			</div>

			<div id="charges" class="col-md-12">
				<?php include 'charges.php' ?>
			</div>

			<div id="doctor" class="col-md-12">
				<?php include 'doctor.php' ?>
			</div>

			<div id="laboratory" class="col-md-12">
				<?php include 'laboratory.php' ?>
			</div>

			<div id="ultrasound" class="col-md-12">
				<?php include 'ultrasound.php' ?>
			</div>

			<div id="xray" class="col-md-12">
				<?php include 'xray.php' ?>
			</div>

			<div id="medicine" class="col-md-12">
				<?php include 'medicine.php' ?>
			</div>

			<div id="supplies" class="col-md-12">
				<?php include 'supplies.php' ?>
			</div>

			<div id="soa" class="col-md-12">
				<?php include 'SOA.php' ?>
			</div>

			<div id="cart" class="col-md-12">
				<?php include 'cart.php' ?>
			</div>

		</div>
	</body>
</html>