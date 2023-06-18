<?php
extract($_POST);

   if($_POST["date"]){

    header("Location: http://localhost/2m/html/Rdate.php?date=".$_POST['date']."");
   }else{

      header("Location: http://localhost/2m/html/Rdate.php");
   }

  

?>