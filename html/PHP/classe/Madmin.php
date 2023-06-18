<?php
require_once("../classe/admin.php");
extract($_POST);

$c=new admin($username,$password,$type);
$c->updateadmin($old_username);
header("location: http://localhost/2m/html/listeAdmins.php")

?>