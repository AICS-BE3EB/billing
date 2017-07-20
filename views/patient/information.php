<?php $patientNo = $db->selectNow('registrationDetails','patientNo','registrationNo',$registrationNo) ?>
<ul>
	<li><b>PIN#:</b> <?= $db->selectNow('patientRecord','manual_patientNo','patientNo',$patientNo) ?></li>
	<li><b>Registration#:</b> <?= $registrationNo ?></li>
	<li><b>Age:</b> <?= $db->selectNow('patientRecord','Age','patientNo',$patientNo) ?></li>
	<li><b>Gender:</b> <?= $db->selectNow('patientRecord','Gender','patientNo',$patientNo) ?></li>
	<li><b>Birthdate:</b> <?= $db->formatDate($db->selectNow('patientRecord','Birthdate','patientNo',$patientNo)) ?></li>
	<li><b>Contact#:</b> <?= $db->selectNow('patientRecord','contactNo','patientNo',$patientNo) ?></li>
	<li><b>Senior:</b> <?= $db->selectNow('patientRecord','Senior','patientNo',$patientNo) ?></li>
	<li><b>Senior ID:</b> <?= $db->selectNow('registrationDetails','seniorID','registrationNo',$registrationNo) ?></li>
	<li><b>Philhealth:</b> <?= $db->selectNow('patientRecord','PHIC','patientNo',$patientNo) ?></li>
	<li><b>HMO:</b> <?= $db->selectNow('registrationDetails','Company','registrationNo',$registrationNo) ?></li>
	<li><b>Time Registered:</b> <?= $db->formatTime($db->selectNow('registrationDetails','timeRegistered','registrationNo',$registrationNo)) ?></li>
	<li><b>Date Registered:</b> <?= $db->formatDate($db->selectNow('registrationDetails','dateRegistered','registrationNo',$registrationNo)) ?></li>
	<li><b>Room:</b> <?= $db->selectNow('registrationDetails','room','registrationNo',$registrationNo) ?></li>
	<li><b>Address:</b> <?= $db->selectNow('patientRecord','Address','patientNo',$patientNo) ?></li>
	<li><b>Registered By:</b> <?= $db->selectNow('registrationDetails','registeredBy','registrationNo',$registrationNo) ?></li>
</ul>