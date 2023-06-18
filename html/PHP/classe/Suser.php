<?php

session_start();
if($_SESSION["type"]!="superadmin"){
	header("location: http://localhost/2m/html/listeUsers.php");
	exit;
  }
	require("./user.php");
	$c=user::getUser($_GET['id_user']);
	$c=user::SUPuser($c->id_user);
	header("location: http://localhost/2m/html/listeUsers.php")
?>
