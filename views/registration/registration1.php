<?php
require '../../class/database.php';
require '../../class/Bcrypt.php';

$db = new database();

$username = $_POST['username'];
$password = $_POST['password'];

$data = [
	"username" => $username,
	"password" => Bcrypt::hashPassword($password)
];

$db->insertNow("registeredUser",$data);