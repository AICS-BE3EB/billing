<?php
	$patient->getChargesByTitle($registrationNo,'SUPPLIES');
	$suppliesTotal = 0;
?>

<?php foreach( $patient->getChargesByTitleItemNo() as $itemNo ): ?>
	<tr>
		<?php $suppliesTotal += $db->selectNow('patientCharges','total','itemNo',$itemNo) ?>
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
		<td><b><?= $db->number_format($suppliesTotal) ?></b></td>
	</tr>