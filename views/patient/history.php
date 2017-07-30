<?php
require "../../session/session.php";
require "../../class/database.php";
require "../../class/patient.php";

	$db = new database();
	$patient = new patient();

	$patientNo = $db->selectNow('patientRecord','patientNo','completeName',$_POST['search']);
	$patient->getAllRecordsByPatientNo($patientNo);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  <script src="../../bower_components/jquery/dist/jquery.js"></script>
  <script src="patient.js"></script>
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <?php include '../navbar/navbar.php' ?>
</head>
<body>
	<div class="row">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-8">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Reg#</th>
						<th>Name</th>
						<th>In</th>
						<th>Out</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach( $patient->getAllRecordsByPatientNo_registrationNo() as $registrationNo ): ?>
						<tr>
							<td><?= $registrationNo ?></td>
							<td><?= $db->selectNow('patientRecord','completeName','patientNo',$patientNo) ?></td>
							<td><?= $db->formatDate($db->selectNow('registrationDetails','dateRegistered','registrationNo',$registrationNo)) ?></td>
							<td><?= $db->formatDate($db->selectNow('registrationDetails','dateUnregistered','registrationNo',$registrationNo)) ?></td>
							<td>
								<form method="POST" action="patient.php">
									<input type="hidden" name="registrationNo" value="<?= $registrationNo ?>">
									<button type="submit" class="btn btn-default btn-sm">View</button>
								</form>
							</td>
						</tr>
					<?php endforeach; ?>	 
				</tbody>
			</table>
		</div>
		<div class="col-md-12">
			
		</div>
	</div>
</body>
</html>