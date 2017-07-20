<?php

	$patient->getChargesByTitle($registrationNo,'LABORATORY');

	$total = 0;
	$cash = 0;
	$philhealth = 0;
	$hmo = 0;

?>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Particulars</th>
			<th>Price</th>
			<th>QTY</th>
			<th>Total</th>
			<th>Cash</th>
			<th>Philhealth</th>
			<th>HMO</th>
			<th>Title</th>
			<th>Details</th>
			<th>User</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach( $patient->getChargesByTitleItemNo() as $itemNo ): ?>
			<tr>
				<td>
					<i><?= $db->selectNow('patientCharges','description','itemNo',$itemNo) ?></i>
				</td>
				<td>
					<?php if( $db->selectNow('patientCharges','title','itemNo',$itemNo) != 'PROFESSIONAL FEE' ): ?>
						<i><?= $db->number_format($db->selectNow('patientCharges','sellingPrice','itemNo',$itemNo)) ?></i>
					<?php else: ?>
						<i><?= $db->selectNow('patientCharges','sellingPrice','itemNo',$itemNo) ?></i>
					<?php endif; ?>
				</td>
				
				<td>
					<i><?= $db->selectNow('patientCharges','quantity','itemNo',$itemNo) ?></i>
				</td>
				<td>
					<i><?= $db->number_format($db->selectNow('patientCharges','total','itemNo',$itemNo)) ?></i>
					<?php $total += $db->selectNow('patientCharges','total','itemNo',$itemNo) ?>
				</td>
				<td>
					<i><?= $db->number_format($db->selectNow('patientCharges','cashUnpaid','itemNo',$itemNo)) ?></i>
					<?php $cash += $db->selectNow('patientCharges','cashUnpaid','itemNo',$itemNo) ?>
				</td>
				<td>
					<i><?= $db->number_format($db->selectNow('patientCharges','phic','itemNo',$itemNo)) ?></i>
					<?php $philhealth += $db->selectNow('patientCharges','phic','itemNo',$itemNo) ?>
				</td>
				<td>
					<i><?= $db->number_format($db->selectNow('patientCharges','company','itemNo',$itemNo)) ?></i>
					<?php $hmo += $db->selectNow('patientCharges','company','itemNo',$itemNo) ?>
				</td>
				<td>
					<i><?= $db->selectNow('patientCharges','title','itemNo',$itemNo) ?></i>
				</td>
				<td>
					<i>
						<?= $db->formatDate($db->selectNow('patientCharges','dateCharge','itemNo',$itemNo)) ?> <?= $db->formatTime($db->selectNow('patientCharges','timeCharge','itemNo',$itemNo)) ?>
					</i>
				</td>
				<td>
					<i><?= $db->selectNow('patientCharges','chargeBy','itemNo',$itemNo) ?></i>
				</td>

			</tr>
		<?php endforeach; ?>
	</tbody>
	<tfoot>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<?php if( ($cash + $philhealth + $hmo) != $total ): ?>
				<td><font color="red"><?= $db->number_format($total) ?></font></td>
			<?php else: ?>
				<td><?= $db->number_format($total) ?></td>
			<?php endif; ?>
			<td><?= $db->number_format($cash) ?></td>
			<td><?= $db->number_format($philhealth) ?></td>
			<td><?= $db->number_format($hmo) ?></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</tfoot>
</table>