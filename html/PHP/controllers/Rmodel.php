<?php
extract($_POST);

   if($_POST["model"]){

    header("Location: http://localhost/2m/html/Rmodel.php?model=".$_POST['model']."");
   }else{

      header("Location: http://localhost/2m/html/Rmodel.php");
   }

  

?>