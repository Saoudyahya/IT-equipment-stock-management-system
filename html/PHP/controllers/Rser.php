<?php
extract($_POST);

   if($_POST["ser"]){

    header("Location: http://localhost/2m/html/Rser.php?ser=".$_POST['ser']."");
   }else{

      header("Location: http://localhost/2m/html/Rser.php");
   }

  

?>