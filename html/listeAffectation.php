<!DOCTYPE html>
<?php  

session_start();
if(!isset($_SESSION["password"])){
    header("location: http://localhost/2m/html/login.php");
    exit;
}
require_once("./PHP/classe/affectation.php");  
require("./PHP/dashboard.php");
?>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>affichage des affectation</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

   
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <script src="../assets/vendor/js/helpers.js"></script>

    <script src="../assets/js/config.js"></script>
  </head>

  <body>
   
    <div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">liste /</span> list des affectation</h4>

              <!-- Basic Bootstrap Table -->
              
              <hr class="my-5" />
              <!-- Bootstrap Table with Header - Dark --> 
              <div class="card">
                <h5 class="card-header">affectation</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th>departement</th>
                        <th>localisation</th>
                        <th>user</th>
                        <th>Batiment</th>
                        <th>etage</th>
                        <th>materiel</th>
                        <th>date</th>
                        <th>Mod/SUP</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php 
                                   $list=affectation::listeA();
                                 
                                    foreach ($list as $affectation) {
                                    ?>                  
                                                      <tr>
                                                      <td><?=$affectation->departement?></td>
                                                        <td><?=$affectation->localisation?></td>
                                                        <td><?=$affectation->user?></td>
                                                        <td><?=$affectation->batiment?></td>
                                                        <td><?=$affectation->etage?></td>
                                                        <td><?=$affectation->materiel?></td>
                                                        <td><?=$affectation->date?></td>
                                                        <td>                       <a href="modifyAffectation.php?id_affectation=<?=$affectation->id_affectation?>" >            <i class="bx bx-edit" style="color: black;" width="602" height="25"></i>
                                                        <a href="./PHP/classe/Saffectation.php?id_affectation=<?=$affectation->id_affectation?>" onclick="return confirm('Are you sure you want to delete this item?');" >      <i class="bx bx-trash" style="color: red;" width="602" height="25"></i> </a>
                                                        </td>
                                                      </tr>
                                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
</div>
</div>
             

 
   
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
