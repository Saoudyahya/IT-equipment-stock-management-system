<?php
extract($_POST);

   if($_POST["etage"]){

    header("Location: http://localhost/2m/html/RAetage.php?etage=".$_POST['etage']."");
   }else{

      header("Location: http://localhost/2m/html/RAetage.php");
   }

  

?>