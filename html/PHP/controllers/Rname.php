<?php
extract($_POST);

   if($_POST["name"]){

    header("Location: http://localhost/2m/html/Rname.php?name=".$_POST['name']."");
   }else{

      header("Location: http://localhost/2m/html/Rname.php");
   }

  

?>