<?php

 

$login = $_POST['login'];
$password = $_POST['password'];

if ($login == 'admin' && $password == 'admin' )
 {
	
 session_start();
 $_SESSION['admin'] = true;
 $script = 'adminpanel.php';	
	 }
	 
	 
else
$script = '../Registration.php';
 header("location: $script");

 ?>









