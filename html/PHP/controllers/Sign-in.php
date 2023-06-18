<?php
	require("../classe/admin.php");
	
	extract($_POST);
	$c=admin::signin($username,$password);

	if($c) {
		session_start();
		$d=admin::getadmin($username);
	$_SESSION["username"]=$username;
	$_SESSION["password"]=$password;
	$_SESSION["type"]=$d->type;
	header("location: http://localhost/2m/html/main.php");
	exit;
	
	}
	header("location: http://localhost/2m/html/login.php");
	
   
	
?>
