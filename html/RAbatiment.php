<!DOCTYPE html>
<?php
require_once("./PHP/Raffectation.php");
require_once("./PHP/classe/affectation.php");  
 

if(isset($_GET["batiment"])){
  $batiment=$_GET["batiment"];
}

?>

<html>
     
<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
     
          <div class="content-wrapper">

             
                    
                    <div class="card-body">
                      <form  method="post" action="./PHP/controllers/RAbatiment.php" >
                      <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">batiment</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-user"></i
                            ></span>
                            <input
                              type="text"
                              class="form-control"
                              name="batiment"
                              id="basic-icon-default-fullname"
                              placeholder="casablanca"
                            
                            />  
                                                    <button type="submit" class="btn btn-primary">Send</button>
                          </div>
</form>
<hr class="my-5" />
              <!-- Bootstrap Table with Header - Dark --> 
              <div class="card">
                <h5 class="card-header">Batiment</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
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
                    <tbody class="table-border-bottom-0">
                    <?php 
                                    
                                    if(isset($batiment)){
                               
                                      $list=affectation::listAffectation_batiment($batiment);
                                     }else{
                                      $list=affectation::listeA();
                                     }
    
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
                    <?php   $mtr[]=$affectation->materiel;
                   } ?>
                      
                    </tbody>
                 
                  </table>
                </div>
              </div>
           
                 
                        </div>
</html>
