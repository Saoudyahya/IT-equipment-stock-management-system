<?php

session_start();
if($_SESSION["type"]!="superadmin"){
	header("location: http://localhost/2m/html/listeAffectation.php");
	exit;
  }
	require("./affectation.php");
	$c=affectation::getaffectation($_GET['id_affectation']);
	$c=affectation::SUPaffectation($c->id_affectation);
	header("location: http://localhost/2m/html/listeAffectation.php")
?>
