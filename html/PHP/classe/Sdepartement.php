<?php

session_start();
if($_SESSION["type"]!="superadmin"){
	header("location: http://localhost/2m/html/listedepartement.php");
	exit;
  }
	require("./departement.php");
	
	departement::SUPdepartement($_GET['name']);
	header("location: http://localhost/2m/html/listedepartement.php")
?>
