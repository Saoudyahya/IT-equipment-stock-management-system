<?php

session_start();
if($_SESSION["type"]!="superadmin"){
	header("location: http://localhost/2m/html/listeCategorie.php");
	exit;
  }
	require("./categorie.php");
	
	categorie::SUPcategorie($_GET['type']);
	header("location: http://localhost/2m/html/listeCategorie.php")
?>
