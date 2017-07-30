<?php
	 $medicine = $patient->getChargesByTitle($registrationNo,'MEDICINE');
?>

<table id="charges-soa" class="table table-hover">
	<thead>
		<tr>
			<th>Date</th>
			<th>Particulars</th>
			<th>QTY</th>
			<th>Price</th>
			<th>Total</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"><b>Medicine</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/medicine.php' ?>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>			
		<tr>
			<td class="seperator"><b>Supplies</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/supplies.php' ?>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"><b>Laboratory</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/laboratory.php' ?>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"><b>Ultrasound</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/ultrasound.php' ?>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"><b>Xray</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/xray.php' ?>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"><b>ECG</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/ecg.php' ?>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"><b>CT-Scan</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/ctscan.php' ?>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"><b>Miscellaneous</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/misc.php' ?>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"><b>OR</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/or.php' ?>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"><b>ER</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/er.php' ?>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"><b>Spirometry</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/spirometry.php' ?>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"><b>Nursery</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/nursery.php' ?>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"><b>Rehab</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/rehab.php' ?>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"><b>Derma</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/derma.php' ?>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"><b>PT</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/pt.php' ?>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"><b>OT</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/ot.php' ?>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"><b>Others</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/others.php' ?>
		<tr>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
		<tr>
			<td class="seperator"><b>Room</b></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
			<td class="seperator"></td>
		</tr>
			<?php include 'soa/room.php' ?>
	</tbody>
</table>