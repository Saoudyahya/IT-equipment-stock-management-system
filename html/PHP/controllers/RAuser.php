<?php
extract($_POST);

   if($_POST["user"]){

    header("Location: http://localhost/2m/html/RAuser.php?user=".$_POST['user']."");
   }else{

      header("Location: http://localhost/2m/html/RAuser.php");
   }

  

?>