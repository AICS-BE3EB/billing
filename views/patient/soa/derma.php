<?php
	$patient->getChargesByTitle($registrationNo,'DERMA');
?>

<?php foreach( $patient->getChargesByTitleItemNo() as $itemNo ): ?>
	<tr>
		<td><?= $db->selectNow('patientCharges','dateCharge','itemNo',$itemNo) ?></td>
		<td><?= $db->selectNow('patientCharges','description','itemNo',$itemNo) ?></td>
		<td><?= $db->selectNow('patientCharges','quantity','itemNo',$itemNo) ?></td>
		<td><?= $db->selectNow('patientCharges','sellingPrice','itemNo',$itemNo) ?></td>
		<td><?= $db->selectNow('patientCharges','total','itemNo',$itemNo) ?></td>
	</tr>
<?php endforeach; ?>