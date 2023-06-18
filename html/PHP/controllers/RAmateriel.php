<?php
extract($_POST);

   if($_POST["materiel"]){

    header("Location: http://localhost/2m/html/RAmateriel.php?materiel=".$_POST['materiel']."");
   }else{

      header("Location: http://localhost/2m/html/RAmateriel.php");
   }

  

?>