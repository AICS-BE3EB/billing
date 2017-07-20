<?php
require '../../session/session.php';
require '../../class/patient.php';

$patient = new patient();

$patient->searchPatient($_GET['q']);