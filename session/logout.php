<?php
session_start(); 
# Destroy the session, this is for the current request
session_destroy();
# Ensure that the cookie is destructed by setting a date in the past
setcookie(session_name(), false, time() - 3600); 
header("Location: http://localhost/billing/views/login/login.php");