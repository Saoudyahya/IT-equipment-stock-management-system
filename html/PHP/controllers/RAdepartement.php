<?php
extract($_POST);

   if($_POST["departement"]){

    header("Location: http://localhost/2m/html/RAdepartement.php?departement=".$_POST['departement']."");
   }else{

      header("Location: http://localhost/2m/html/RAdepartement.php");
   }

  

?>