<?php
	$patient->getChargesByTitle($registrationNo,'LABORATORY');
	$laboratoryTotal = 0;
?>

<?php foreach( $patient->getChargesByTitleItemNo() as $itemNo ): ?>
	<tr>
		<?php $laboratoryTotal += $db->selectNow('patientCharges','total','itemNo',$itemNo) ?>
		<td><?= $db->formatDate($db->selectNow('patientCharges','dateCharge','itemNo',$itemNo)) ?></td>
		<td><?= $db->selectNow('patientCharges','description','itemNo',$itemNo) ?></td>
		<td><?= $db->selectNow('patientCharges','quantity','itemNo',$itemNo) ?></td>
		<td><?= $db->number_format($db->selectNow('patientCharges','sellingPrice','itemNo',$itemNo)) ?></td>
		<td><?= $db->number_format($db->selectNow('patientCharges','total','itemNo',$itemNo)) ?></td>
	</tr>
<?php endforeach; ?>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><?= $db->number_format($laboratoryTotal) ?></td>
	</tr>