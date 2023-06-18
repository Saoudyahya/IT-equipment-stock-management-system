<?php

session_start();
if($_SESSION["type"]!="superadmin"){
	header("location: http://localhost/2m/html/listemateriel.php");
	exit;
  }
	require("./materiel.php");
	$c=materiel::getmateriel($_GET['ser']);
	$c=materiel::SUPmateriel($c->ser);
	header("location: http://localhost/2m/html/listemateriel.php");
  
	
?>
