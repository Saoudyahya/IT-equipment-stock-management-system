<!DOCTYPE html>
<?php
require_once("./PHP/Rmateriel.php");
require_once("./PHP/classe/materiel.php");  
require_once("./PHP/classe/categorie.php");  
$C=categorie::getall();
if(isset($_GET["type"])){
  $type=$_GET["type"];
}
?>

<html>
     
<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
     
          <div class="content-wrapper">

             
                    
                    <div class="card-body">
                      <form  method="post" action="./PHP/controllers/Rtype.php" >
                        <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">type</label>
                        <div class="input-group input-group-merge">
                       
                          <select type="text" name="type"  class="form-control" id="exampleInputPassword1">
                                                              <option value="" disabled selected> choisir le type de materiel</option><?php foreach($C as$elm) { ?>

                                                            <option value="<?php echo $elm["type"] ?>"><?php echo $elm["type"] ?>  </option>

                                                          <?php  }   ?>
                                                          
                                                    </select>   
                                                    <button type="submit" class="btn btn-primary">Send</button>
                          </div>
</form>
<hr class="my-5" />
              <!-- Bootstrap Table with Header - Dark --> 
              <div class="card">
                <h5 class="card-header">Types</h5>
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
                                 if(isset($type)){
                               
                                  $list=Materiel::listMateriel_type($type);
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
