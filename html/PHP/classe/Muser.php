<?php
	require_once("./user.php");
	extract($_POST);
	$c=new user($id_user,$name,$departement);
	$c->updateuser();
	header("location: http://localhost/2m/html/listeUsers.php")
?>
