<?php
require_once("../classe/categorie.php");
extract($_POST);

$c=new categorie($new_type);
$c->updatecategorie($old_type);
header("location: http://localhost/2m/html/listeCategorie.php")

?>