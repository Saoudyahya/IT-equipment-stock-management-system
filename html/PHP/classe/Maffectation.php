<?php
	require_once("./affectation.php");
	extract($_POST);
	$c=new affectation($id_affectation,$departement,$localisation,$user,$batiment,$etage,$materiel,$date);
	$c->updateaffectation();
	header("location: http://localhost/2m/html/listeAffectation.php")
?>
