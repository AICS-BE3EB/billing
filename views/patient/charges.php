<?php

	$patient->getCharges($registrationNo);

	$total = 0;
	$cash = 0;
	$philhealth = 0;
	$hmo = 0;
	$otShare = 0;

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
			<th>OT Share</th>
			<th>Title</th>
			<th>Details</th>
			<th>User</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach( $patient->getChargesItemNo() as $itemNo ): ?>
			<tr>
				<td>
					<i><?= $db->selectNow('patientCharges','description','itemNo',$itemNo) ?></i>
				</td>
				<td>
					<?php if( $db->selectNow('patientCharges','title','itemNo',$itemNo) != 'PROFESSIONAL FEE' && $db->selectNow('patientCharges','title','itemNo',$itemNo) != 'DERMA' ): ?>
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
					<i><?= $db->number_format($db->selectNow('patientCharges','otShare','itemNo',$itemNo)) ?></i>
					<?php $otShare += $db->selectNow('patientCharges','otShare','itemNo',$itemNo) ?>
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
			<?php if( ($cash + $philhealth + $hmo + $otShare) != $total ): ?>
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