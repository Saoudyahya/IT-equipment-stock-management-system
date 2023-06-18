<?php
extract($_POST);

   if($_POST["batiment"]){

    header("Location: http://localhost/2m/html/RAbatiment.php?batiment=".$_POST['batiment']."");
   }else{

      header("Location: http://localhost/2m/html/RAbatiment.php");
   }

  

?>