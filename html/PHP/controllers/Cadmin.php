<?php
require_once("../classe/admin.php");
extract($_POST);
$c=new admin($username,$password,$type);
$c->save();
header("location: http://localhost/2m/html/listeAdmins.php")
?>