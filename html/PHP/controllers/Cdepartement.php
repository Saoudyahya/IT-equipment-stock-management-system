<?php
require_once("../classe/departement.php");
extract($_POST);
$c=new departement($name);
$c->save();
header("location: http://localhost/2m/html/user.php")
?>