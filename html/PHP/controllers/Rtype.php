<?php
extract($_POST);

   if($_POST["type"]){

    header("Location: http://localhost/2m/html/Rtype.php?type=".$_POST['type']."");
   }else{

      header("Location: http://localhost/2m/html/Rtype.php");
   }

  

?>