<?php
require_once("../classe/affectation.php");
extract($_POST);
var_dump($_POST);
$c=new affectation(1,$departement,$localisation,$user,$batiment,$etage,$materiel,$date,$cause);
$c->save();
header("location: http://localhost/2m/html/listeAffectation.php")
?>