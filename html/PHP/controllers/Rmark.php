<?php
extract($_POST);

   if($_POST["mark"]){

    header("Location: http://localhost/2m/html/Rmark.php?mark=".$_POST['mark']."");
   }else{

      header("Location: http://localhost/2m/html/Rmark.php");
   }

  

?>