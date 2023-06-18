<?php
extract($_POST);

   if($_POST["code_2m"]){

    header("Location: http://localhost/2m/html/Rcode_2m.php?code_2m=".$_POST['code_2m']."");
   }else{

      header("Location: http://localhost/2m/html/Rcode_2m.php");
   }

  

?>