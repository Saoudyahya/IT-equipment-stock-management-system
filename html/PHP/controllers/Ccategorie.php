<?php
require_once("../classe/categorie.php");
$newtype=$_POST["newtype"];
$c=new categorie($newtype);
$c->save();
header("location: http://localhost/2m/html/materiel.php")
?>