<?php

require 'class/database.php';

$ro = new database();
 
echo $ro->selectNow("patientRecord","completeName","patientNo","3");