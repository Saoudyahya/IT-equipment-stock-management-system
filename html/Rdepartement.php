<!DOCTYPE html>
<?php
require_once("./PHP/Ruser.php");
require_once("./PHP/classe/user.php");  
require_once("./PHP/classe/departement.php");  

if(isset($_GET["departement"])){
  $deapartement=$_GET["departement"];
}
$C=departement::getall();
?>

<html>
     
<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
     
          <div class="content-wrapper">

             
                    
                    <div class="card-body">
                      <form  method="post" action="./PHP/controllers/Rdepartement.php" >
                        <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">departement</label>
                        <div class="input-group input-group-merge">
                       
                          <select type="text" name="departement"  class="form-control" id="exampleInputPassword1">
                                                              <option value="" disabled selected> choisir le type de materiel</option><?php foreach($C as$elm) { ?>

                                                            <option value="<?php echo $elm["name"] ?>"><?php echo $elm["name"] ?>  </option>

                                                          <?php  }   ?>
                                                          
                                                    </select>   
                                                    <button type="submit" class="btn btn-primary">Send</button>
                          </div>
</form>
<hr class="my-5" />
              <!-- Bootstrap Table with Header - Dark --> 
              <div class="card">
                <h5 class="card-header">Departement</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th>name</th>
                        <th>departement</th>
                       <th>Mod/Sup</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <tbody class="table-border-bottom-0">
                    <?php 
                                    
                                    if(isset($deapartement)){
                               
                                      $list=user::listUsers_departement($deapartement);
                                     }else{
                                      $list=user::listeU();
                                     }
    
                                    foreach ($list as $user) {
                                    ?>                  
                                                      <tr>
                                                    
                                                        <td><?=$user->name?></td>
                                                        <td><?=$user->departement?></td>
                                                        
                                                        <td>                              <a href="modifyUser.php?id_user=<?=$user->id_user?>" >    <i class="bx bx-edit" style="color: black;" width="602" height="25"></i></a>
                                                        <a href="./PHP/classe/Suser.php?id_user=<?=$user->id_user?>" onclick="return confirm('Are you sure you want to delete this item?');"  >    <i class="bx bx-trash" style="color: red;" width="602" height="25" ></i> </a>
                                                        </td>
                                                      </tr>
                                    <?php } ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
                        </div>
</html>
