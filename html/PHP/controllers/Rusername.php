<?php
extract($_POST);

   if($_POST["username"]){

    header("Location: http://localhost/2m/html/Rusername.php?username=".$_POST['username']."");
   }else{

      header("Location: http://localhost/2m/html/Rusername.php");
   }

  

?>