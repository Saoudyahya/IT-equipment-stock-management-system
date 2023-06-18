<?php
extract($_POST);

   if($_POST["departement"]){

    header("Location: http://localhost/2m/html/Rdepartement.php?departement=".$_POST['departement']."");
   }else{

      header("Location: http://localhost/2m/html/Rdepartement.php");
   }

  

?>