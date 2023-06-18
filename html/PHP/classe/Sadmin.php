<?php

session_start();
if($_SESSION["type"]!="superadmin"){
	header("location: http://localhost/2m/html/listeMateriel.php");
	exit;
  }
	require("./admin.php");
	$c=admin::getadmin($_GET['username']);
	$c=admin::SUPadmin($c->username);
	header("location: http://localhost/2m/html/listeAdmins.php")
?>
