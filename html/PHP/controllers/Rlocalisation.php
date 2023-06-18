<?php
extract($_POST);

   if($_POST["localisation"]){

    header("Location: http://localhost/2m/html/Rlocalisation.php?localisation=".$_POST['localisation']."");
   }else{

      header("Location: http://localhost/2m/html/Rlocalisation.php");
   }

  

?>