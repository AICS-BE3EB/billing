<?php
require '../../class/database.php';
require '../../class/Bcrypt.php';

$db = new database();

$username = $_POST['username'];
$password = $_POST['password'];


$hash = $db->selectNow("registeredUser","password","username",$username);
if( Bcrypt::checkPassword($password,$hash) ) {
	echo "Login";
}else {
	echo "Fail";
}