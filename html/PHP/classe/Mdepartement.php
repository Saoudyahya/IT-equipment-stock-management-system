<?php
require_once("../classe/departement.php");
extract($_POST);

$c=new departement($new_name);
$c->updatedepartement($old_name);
header("location: http://localhost/2m/html/listedepartement.php")

?>