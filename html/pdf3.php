<?php $html='
<style>

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
  font-family: Montserrat, sans-serif;
  font-size:10pt;
}

/*
The links in the document should not be highlighted by an different color and underline
instead we use the color value inherit to get the current texts color.
*/
a{
  color:inherit;
  text-decoration:none;
}

/*
For the dividers in the document we use an HR element with a margin top and bottom 
of 1cm, no height and only a border top of one millimeter.
*/
hr{
  margin:1cm 0;
  height:0;
  border:0;
  border-top:1mm solid var(--highlight-color);
}

/*
The page header in our document uses the HTML HEADER element, we define a height 
of 8cm matching the margin top of the page (see @page rule) and a padding left
and right of 2cm. We did not give the page itself a margin of 2cm to ensure that
the background color goes to the edges of the document.

As mentioned above in the comment for the @page the position property with the 
value running(header) makes this HTML element float into the top left page margin
box. This page margin box repeats on every page in case we would have a multi-page
estimate.
*/
header{
  height:8cm;
  padding:0 2cm;
  position:running(header);
  background-color:var(--header-bg-color);
}

/*
For the different sections in the header we use some flexbox and keep space between
with the justify-content property.
*/
header .headerSection{
  display:flex;
  justify-content:space-between;
}

/*
To move the first sections a little down and have more space between the top of 
the document and the logo/company name we give the section a padding top of 5mm.
*/
header .headerSection:first-child{
  padding-top:.5cm;
}

/*
Similar we keep some space at the bottom of the header with the padding-bottom
property.
*/
header .headerSection:last-child{
  padding-bottom:.5cm;
}

/*
Within the header sections we have defined two DIV elements, and the last one in
each headerSection element should only take 35% of the headers width.
*/
header .headerSection div:last-child{
  width:35%;
}

/*
For the logo, where we use an SVG image and the company text we also use flexbox
to align them correctly.
*/
header .logoAndName{
  display:flex;
  align-items:center;
  justify-content:space-between;
}

/*
The SVG gets set to a fixed size and get 5mm margin right to keep some distance
to the company name.
*/
header .logoAndName svg{
  width:1.5cm;
  height:1.5cm;
  margin-right:.5cm;
}

/*
To ensure the top right section "ESTIMATE" starts on the same level as the Logo &
Name we set a padding top of 1cm for this element.
*/
header .headerSection .estimateDetails{
  padding-top:1cm;
}

/*
In the second row of header sections, we find the "ISSUED TO" area where we also
make use of flexbox to achive the desired layout.
*/
header .headerSection .issuedTo{
  display:flex;
  justify-content:space-between;
}


header .headerSection .issuedTo h3{
  margin:0 .75cm 0 0;
  color:var(--highlight-color);
}

/*
The paragraphs within the header sections DIV elements get a small 2px margin top
to ensure its in line with the "ISSUED TO" header text.
*/
header .headerSection div p{
  margin-top:2px;
}

/*
All header elements and paragraphs within the HTML HEADER tag get a margin of 0.
*/
header h1,
header h2,
header h3,
header p{
  margin:0;
}

/*
Heading of level 2 and 3 ("ESTIMATE" and "ISSUED TO") need to be written in 
uppercase, so we use the text-transform property for that.
*/
header h2,
header h3{
  text-transform:uppercase;
}

/*
The divider in the HEADER element gets a slightly different margin than the 
standard dividers.
*/
header hr{
  margin:1cm 0 .5cm 0;
}

/*
Our main content is all within the HTML MAIN element. In this template this are
two tables. The one which lists all items and the table which shows us the 
subtotal, tax and total amount.

Both tables get the full width and collapse the border.
*/
main table{
  width:100%;
  border-collapse:collapse;
}

/*
We put the first tables headers in a THEAD element, this way they repeat on the
next page if our table overflows to multiple pages.

The text color gets set to the highlight color.
*/
main table thead th{
  height:1cm;
  color:var(--highlight-color);
}

/*
For the last three columns we set a fixed width of 2.5cm, so if we would change
the documents size only the first column with the item name and description grows.
*/
main table thead th:nth-of-type(2),
main table thead th:nth-of-type(3),
main table thead th:last-of-type{
  width:2.5cm;
}

/*
The items itself are all with the TBODY element, each cell gets a padding top
and bottom of 2mm and a border bottom of .5mm as a row separator.
*/
main table tbody td{
  padding:2mm 0;
  border-bottom:0.5mm solid var(--table-row-separator-color);
}

/*
The cells in the last column (in this template the column containing the total)
get a text align right so the text is at the end of the table.
*/


/*
By default text within TH elements is aligned in the center, we do not want that
so we overwrite it with an left alignment.
*/
main table th{
  text-align:left;
}

/*
The summary table, so the table containing the subtotal, tax and total amount 
gets a width of 40% + 2cm. The plus 2cm is added because our body has a 2cm padding
but we want our highlight color for the total row to go to the edge of the document.

To move the table to the right side we simply set a margin-left of 60%.
*/
main table.summary{
  width:calc(40% + 2cm);
  margin-left:60%;
  margin-top:.5cm;
}

/*
The row containing the total amount gets its background color set to the highlight 
color and the font weight to bold.
*/
main table.summary tr.total{
  font-weight:bold;
  background-color:var(--highlight-color);
}

/*
The TH elements of the summary table are not on top but the cells on the left side
these get a padding left of 1cm to give the highlight color some space.
*/
main table.summary th{
  padding:4mm 0 4mm 1cm;
  border-bottom:0;
}

/*
As only the highlight background color should go to the edge of the document
but the text should still have the 2cm distance, we set the padding right to 
2cm.
*/
main table.summary td{
  padding:4mm 2cm 4mm 0;
  border-bottom:0;
}

/*
The content below the tables is placed in a ASIDE element next to the MAIN element.
To ensure this element is always at the bottom of the page, just above the page 
footer, we use the Prince custom property "-prince-float" with the value bottom.

See Page Floats on https://www.princexml.com/howcome/2021/guides/float/.
*/
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

/*
The page footer in our document uses the HTML FOOTER element, we define a height 
of 3cm matching the margin bottom of the page (see @page rule) and a padding left
and right of 2cm. We did not give the page itself a margin of 2cm to ensure that
the background color goes to the edges of the document.

As mentioned above in the comment for the @page the position property with the 
value running(footer) makes this HTML element float into the bottom left page margin
box. This page margin box repeats on every page in case we would have a multi-page
estimate.

The content inside the footer is aligned with the help of line-height 3cm and a 
flexbox for the child elements.
*/
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

/*
The first link in the footer, which points to the company website is highlighted 
in bold.
*/
footer a:first-child{
  font-weight:bold;
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
  <div class="headerSection">
    <!-- As a logo we take an SVG element and add the name in an standard H1 element behind it. -->
    <div class="logoAndName">
      <svg>
       
      </svg>
      <h1>department  <?php echo $departement?></h1>
    </div>
    <!-- Details about the estimation are on the right top side of each page. -->
    <div>
      <h2>Estimate</h2>
      <p>
        <b>Date Issued</b> <?= date("Y/m/d") ?>
        <br>
        <?=date("h:i:sa")?>
      </p>
      <p>
        <b>Project No.</b> 01
      </p>
    </div>
  </div>

  <!-- The two header rows are divided by an blue line, we use the HR element for this. -->
  <hr />
  <div class="headerSection">
    <!-- The clients details come on the left side below the logo and company name. -->
    <div class="issuedTo">
      <h3>Issued to</h3>
      <p>
        <b>Client Name</b>
        <br />
        123 Alphabet Road, Suite 01
        <br />
        Indianapolis, IN 46260
        <br />
        <a href="mailto:clientname@clientwebsite.com">
          clientname@clientwebsite.com
        </a>
        <br />
        317.123.8765
      </p>
    </div>
    <!-- Additional notes can be placed below the estimation details. -->
    <div>
      <p>
        <b>Notes</b>
        <br />
     this document will expire in   
      </p>
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

<!-- In the main section the table for the separate items is added. Also we add another table for the summary, so subtotal, tax and total amount. -->
<main>
  <table>
    <!-- A THEAD element is used to ensure the header of the table is repeated if it consumes more than one page. -->
    <thead>
      <tr>
        <th>model</th>
       <?php  foreach($var1 as $a) { ?>
        <th><?=$a?></th>
 <?php     } ?>
      </tr>
    </thead>
    <!-- The single estimate items are all within the TBODY of the table. -->
    <tbody>
      <tr>
        
        <?php  foreach($results1 as $a) { ?>
          <td>  <b><?=$a["model"]?></b>  </td>
          <?php  
          foreach($var1 as $b) {
         if(Materiel::ifmodelmark($b,$a["model"])){
           ?>  
<td><img src="./verifier.jpg" class="logo"></td>
<?php     }else{ ?>   
  <td><img src="./bouton-x.jpg" class="logo"></td>
<?php     }} ?>   

      </tr>
      <?php     } ?> 
      
    
    </tbody>
  </table>
  <!-- The summary table contains the subtotal, tax and total amount. -->
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
          
       echo $d[0];?>
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

  <canvas id="myChart" style="width:100%;max-width:600px;position: absolute; left: 180; top: 650;"></canvas>
  <?php
      foreach($var1 as $a) {
        $e[]=affectation::Nmodel($departement,$a);
   }
  $list=array_column($e,"count(model)");

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

    
</main>';
  

require_once './dompdf/autoload.inc.php';



// instantiate and use the dompdf class
$dompdf = new Dompdf\Dompdf();
$dompdf->loadHtml('Your HTML code here');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("ticket.pdf");

?>