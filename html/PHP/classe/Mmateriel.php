<?php
require_once("../classe/Materiel.php");
extract($_POST); 
$c=new Materiel($ser,$type,$mark,$model,$code_2m);
$c->updatemateriel($old_ser);
header("location: http://localhost/2m/html/listeMateriel.php")
?>