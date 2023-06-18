<?php
require_once("../classe/user.php");
extract($_POST);
$c=new user(1,$name,$departement);
$c->save();
header("location: http://localhost/2m/html/listeUsers.php")
?>