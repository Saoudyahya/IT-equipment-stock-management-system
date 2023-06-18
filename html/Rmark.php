<!DOCTYPE html>
<?php
require_once("./PHP/Rmateriel.php");
require_once("./PHP/classe/materiel.php");  
if(isset($_GET["mark"])){
  $mark=$_GET["mark"];
}
?>

<html>
     
<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
     
          <div class="content-wrapper">

             
                    
                    <div class="card-body">
                      <form  method="post" action="./PHP/controllers/Rmark.php" >
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">mark</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-user"></i
                            ></span>
                            <input
                              type="text"
                              class="form-control"
                              name="mark"
                              id="basic-icon-default-fullname"
                              placeholder="John Doe"
                            
                            />
                            <button type="submit" class="btn btn-primary">Send</button>
                          </div>
</form>
<hr class="my-5" />
              <!-- Bootstrap Table with Header - Dark --> 
              <div class="card">
                <h5 class="card-header">mark</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th>ser</th>
                        <th>type</th>
                        <th>mark</th>
                        <th>model</th>
                        <th>code_2m</th>
                        <th>Mod/SUP</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php 
                                 if(isset($mark)){
                               
                                  $list=Materiel::listMateriel_mark($mark);
                                 }else{
                                  $list=Materiel::listeM();
                                 }

                                   
                                    foreach ($list as $Materiel) {
                                    ?>                  
                                                      <tr>
                                                      <td><?=$Materiel->ser?></td>
                                                        <td><?=$Materiel->type?></td>
                                                        <td><?=$Materiel->mark?></td>
                                                        <td><?=$Materiel->model?></td>
                                                        <td><?=$Materiel->code_2m?></td>
                                                        <td>                       <a href="modifyMateriel.php?ser=<?=$Materiel->ser?>" >            <i class="bx bx-edit" style="color: black;" width="602" height="25"></i>
                                                        <a href="./PHP/classe/Smateriel.php?ser=<?=$Materiel->ser?>" onclick="return confirm('Are you sure you want to delete this item?');" >      <i class="bx bx-trash" style="color: red;" width="602" height="25"></i> </a>
                                                        </td>
                                                      </tr>
                                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
                        </div>
</html>
