<style>
/* 
Import the desired font from Google fonts. 
*/
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap');

/* 
Define all colors used in this template 
*/
:root{
  --font-color: black;
  --highlight-color: #60D0E4;
  --header-bg-color: #B8E6F1;
  --footer-bg-color: #BFC0C3;
  --table-row-separator-color: #BFC0C3;
}

  


body{
  margin:0;
  padding:1cm 2cm;
  color:var(--font-color);
  font-family: 'Montserrat', sans-serif;
  font-size:10pt;
}


a{
  color:inherit;
  text-decoration:none;
}


hr{
  margin:1cm 0;
  height:0;
  border:0;
  border-top:1mm solid var(--highlight-color);
}


header{
  height:8cm;
  padding:0 2cm;
  position:running(header);
  background-color:var(--header-bg-color);
}


header .headerSection{
  display:flex;
  justify-content:space-between;
}


header .headerSection:first-child{
  padding-top:.5cm;
}


header .headerSection:last-child{
  padding-bottom:.5cm;
}


header .headerSection div:last-child{
  width:35%;
}


header .logoAndName{
  display:flex;
  align-items:center;
  justify-content:space-between;
}


header .logoAndName svg{
  width:1.5cm;
  height:1.5cm;
  margin-right:.5cm;
}


header .headerSection .estimateDetails{
  padding-top:1cm;
}


header .headerSection .issuedTo{
  display:flex;
  justify-content:space-between;
}


header .headerSection .issuedTo h3{
  margin:0 .75cm 0 0;
  color:var(--highlight-color);
}


header .headerSection div p{
  margin-top:2px;
}


header h1,
header h2,
header h3,
header p{
  margin:0;
}


header h2,
header h3{
  text-transform:uppercase;
}

header hr{
  margin:1cm 0 .5cm 0;
}


main table{
  width:100%;
  border-collapse:collapse;
}


main table thead th{
  height:1cm;
  color:var(--highlight-color);
}

main table thead th:nth-of-type(2),
main table thead th:nth-of-type(3),
main table thead th:last-of-type{
  width:2.5cm;
}

main table tbody td{
  padding:2mm 0;
  border-bottom:0.5mm solid var(--table-row-separator-color);
}

main table th{
  text-align:left;
}


main table.summary{
  width:500px;
  margin-top:.5cm;
}


main table.summary tr.total{
  font-weight:bold;
  background-color:var(--highlight-color);
}


main table.summary th{
  padding:4mm 0 4mm 1cm;
  border-bottom:0;
}

main table.summary td{
  padding:4mm 2cm 4mm 0;
  border-bottom:0;
}

aside{
  -prince-float: bottom;
  padding:0 2cm .5cm 2cm;
}

/*
The content itself is shown in 2 columns.
*/
aside p{
  margin:0;
  column-count:2;
}


footer{
  height:3cm;
  line-height:3cm;
  padding:0 2cm;
  position:running(footer);
  background-color:var(--footer-bg-color);
  font-size:8pt;
  display:flex;
  align-items:baseline;
  justify-content:space-between;
}
.logo{
  width: 20;
  height:20;
}
.logo2m{
  width: 300;
  height:120;
 margin-left:36%;
 margin-top:20px;
 margin-bottom:20px;
}


footer a:first-child{
  font-weight:bold;
}
.cont{
  display: flex;
  flex-wrap: nowrap;
}

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
<header>
<?php
require_once("./PHP/classe/Materiel.php");
require_once("./PHP/classe/affectation.php");
extract($_POST);
  
  foreach($result as $a){
  $results[]=materiel::get_mark($a);
  }
  foreach($results as $a){
    $results1[]=materiel::get_model($a["mark"]);
    }
    foreach($results as $a){
      $var1[]=$a["mark"];
      }
    $var1=array_unique($var1);
    
?>
  <img
                    src="../assets/img/2m.jpg"
                   class="logo2m"
                 
                  />
  <div class="headerSection">
    
    <div class="logoAndName">
  
                  <br>
      <h1>department  <?php echo $departement?></h1>
    </div>
   
    <div>
      <h2>Estimate</h2>
      <p>
        <b>Date Issued</b> <?= date("Y/m/d") ?>
        <br>
        <?=date("h:i:sa")?>
      </p>
      <p>
        <b>Project No.</b> <?php echo rand(8888,123) ?>
      </p>
    </div>
  </div>



  </div>
</header>


<footer>
    <a href="https://2m.ma">
      2m.ma
    </a>
    <a href="mailto:company@website.com">
      2m@gmail.com  
    </a>
    <span>
   072659498787987
    </span>
    <span>
     affectation materiel n*5544984
    </span>
</footer>


<main>
  <table>
   
    <thead>
      <tr>
        <th>model</th>
       <?php  foreach($var1 as $a) { ?>
        <th><?=$a?></th>
 <?php     } ?>
      </tr>
    </thead>
  
    <tbody>
      <tr>
        
        <?php  foreach($results1 as $a) { ?>
          <td>  <b><?=$a["model"]?></b>  </td>
          <?php  
          foreach($var1 as $b) {
         if(Materiel::ifmodelmark($b,$a["model"])){
           ?>  
<td><img src="./verifier.png" class="logo"></td>
<?php     }else{ ?>   
  <td><img src="./bouton-x.png" class="logo"></td>
<?php     }} ?>   

      </tr>
      <?php     } ?> 
      
    
    </tbody>
  </table>
  <!-- The summary table contains the subtotal, tax and total amount. -->
  <div class="cont">
  <table class="summary">
    <tr>
      <th>
        totale des mark
      </th>
      <td>
      <?php echo count($var1)?>
      </td>
    </tr>
    <tr>
      <th>
    total de model
      </th>
      <td>
      <?php echo count($results1)?>
      </td>
    </tr>
    <tr>
      <th>
    totale de materiel
      </th>
      <td>
      <?php echo count($result)?>
      </td>
    </tr>
    <tr>
      <th>
    totale des utilisateur
      </th>
      <td>
      <?php  $d=affectation::Nuser($departement);
   foreach($d as $c){
    $u[]=$c["user"];
   } 
   $u=array_unique($u);
     echo count($u);
      ?>
      </td>
    </tr>
    <tr class="total">
      <th>
        percentage Materiel 
      </th>
      <td>
      <?php 
      $c=materiel::	get_allNmateriel();
      echo  count($result)*100/$c[0]?>%
      </td>
    </tr> <tr class="total">
      <th>
        percentage affectation 
      </th>
      <td>
      <?php 
      $c=affectation::	get_allNaffectation();
      echo  count($result)*100/$c[0]?>%
      </td>
    </tr>
  </table>

  <canvas id="myChart" style="width:55%;max-width:600px; left: 180; top: 650;"></canvas>
  </div>
  <?php
      foreach($var1 as $a) {
        $e[]=affectation::Nmodel($departement,$a);
   }
  $list=array_column($e,"count(model)");
  echo '<div id="my-element1" data-array="' . htmlspecialchars(json_encode($list)) . '"></div>';
echo '<div id="my-element" data-array="' . htmlspecialchars(json_encode($var1)) . '"></div>';
?>
<script>
  var myElement = document.getElementById("my-element");
  var myElement1 = document.getElementById("my-element1");


  var xValues = JSON.parse(myElement.getAttribute("data-array"));
var yValues =JSON.parse(myElement1.getAttribute("data-array"));
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "statistic"
    }
  }
});
</script>

    
</main>
<br>

<!-- Within the aside tag we will put the terms and conditions which shall be shown below the estimate table. -->

