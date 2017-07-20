<?php
 session_start();

 if( !isset($_SESSION['userId']) ) {
 	header("Location: http://localhost/billing/views/login/login.php");
 }
