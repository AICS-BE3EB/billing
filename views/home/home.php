<?php 
	require '../class/database.php';
	require '../class/room.php';
	require '../class/patient.php';

	$db = new database();
	$room = new room();
	$patient = new patient();
	
	$room->roomList();
?>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Room</th>
			<th>Patient</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach( $room->getRoomList() as $room ): ?>
			<tr>
				<td>
					<?= $db->formatText($room) ?>
				</td>
				<td>
					<?= $db->formatText($patient->getPatientByRoom($room)) ?>
				</td>
				<td>
					<?php if( $patient->getPatientByRoom($room) != "" ): ?>
						<form method="POST" action="patient/patient.php" target="_blank">
							<input type="hidden" name="registrationNo" value="<?= $patient->getRegistrationNoByRoom($room) ?>">
							<button type="submit" class="btn btn-success btn-xs">View</button>
						</form>
					<?php endif; ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>