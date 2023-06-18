<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["password"])){
    header("location: http://localhost/2m/html/login.php");
    exit;
}
if($_SESSION["type"]!="superadmin"){
  header("location: http://localhost/2m/html/listeAffectation.php");
  exit;
}

 require_once("./PHP/classe/user.php");
 require_once("./PHP/classe/affectation.php");
 require_once("./PHP/dashboard.php");

 $affectation=affectation::getaffectation($_GET['id_affectation']);

 $user=user:: getDUser($affectation->departement);
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

    <title>insertion d'affectation</title>

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
  
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
     
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">INSERSION/</span>affectation</h4>

            
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">entrer les information d'affectation</h5>
                      
                    </div>
                    <div class="card-body">

                    
                      <form  method="post" action="./PHP/classe/Maffectation.php" >
                      <input type="number"value="<?=$affectation->id_affectation?>"  name="id_affectation"  id="exampleInputPassword1" style="display: none;">
                      <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company"> departement  </label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-windows"></i
                            ></span>
                            <input
                              type="text"
                              name="departement"
                              value=<?=$affectation->departement?>
                              class="form-control"
                              placeholder="CASABLANCA"
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                              
                          readonly  />
                         
                  
                          </div>
                          
                                 
                                        
                                                           
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company"> localisation  </label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-windows"></i
                            ></span>
                            <input
                              type="text"
                              name="localisation"
                              class="form-control"
                             value=<?=$affectation->localisation?>
                            
                            
                              
                            />
                         
                  
                          </div>
                        </div>
                        <div class="form-text">You can use letters, numbers & periods</div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-email">user</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-mobile"></i></span>
                           
                         
                            <select type="text" name="user"  class="form-control" id="exampleInputPassword1">
                                                              <option value="" disabled selected> choisir le user</option><?php foreach($user as $elm) { ?>

                                                            <option value="<?php echo $elm["name"] ?>"><?php echo $elm["name"] ?>  </option>

                                                          <?php  }   ?>
                                                    </select>    
                                                    
                                                    
                                                
                                                    </div>
                          
                       
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">batiment</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                              ><i class="bx bx-buildings"></i
                            ></span>
                            <input
                              type="text"
                              name="batiment"
                              class="form-control phone-mask"
                              placeholder="58D8Z9D"
                              value=<?=$affectation->batiment?>
                           
                              
                            
                            />
                          </div>

                          <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">etage</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                              ><i class="bx bx-buildings"></i
                            ></span>
                            <input
                              type="number"
                              name="etage"
                              value=<?=$affectation->etage?>
                              class="form-control phone-mask"
                              placeholder="1 or 2"
                              aria-label="658 799 8941"
                              aria-describedby="basic-icon-default-phone2"
                             
                            />
                          </div>
                          <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">date</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                              ><i class="bx bx-buildings"></i
                            ></span>
                            <input
                              type="date"
                              name="date"
                              id="other"
                              value=<?=$affectation->date?>
                              class="form-control phone-mask"
                              placeholder="1 or 2"
                              aria-label="658 799 8941"
                              aria-describedby="basic-icon-default-phone2"
                              
                            />
                          </div>
                          <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">Materiel</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                              ><i class="bx bx-code"></i
                            ></span>
                            <input
                              type="text"
                              name="materiel"
                              value=<?=$affectation->materiel?>
                              class="form-control phone-mask"
                              placeholder="55DZFA9"
                              aria-label="658 799 8941"
                              aria-describedby="basic-icon-default-phone2"
                              
                            />
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                           
                          </div>
                        </div>
                    
                 
                    </div>
                  </div>
                                                              </div>
                                                              </div>
                 
                      </div>
              </div>
            </div>
            <!-- / Content -->
            <!-- / Content -->

          
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



   
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
