<?php
session_start();
require '../../class/database.php';
require '../../class/Bcrypt.php';

$db = new database();

$username = $_POST['username'];
$password = $_POST['password'];


$hash = $db->selectNow("registeredUser","password","username",$username);
if( Bcrypt::checkPassword($password,$hash) ) {
	$_SESSION['userId'] = $db->selectNow('registeredUser','employeeID','username',$username);
	header("Location: http://localhost/billing/views/main.php");

}else {
	header("Location: http://localhost/billing/views/login/login.php");
}