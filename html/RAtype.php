<!DOCTYPE html>
<?php
require_once("./PHP/Radmin.php");
require_once("./PHP/classe/admin.php");  
if(isset($_GET["type"])){
  $type=$_GET["type"];
}

?>

<html>
     
<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
     
          <div class="content-wrapper">

             
                    
                    <div class="card-body">
                      <form  method="post" action="./PHP/controllers/RAtype.php" >
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">type</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-user"></i
                            ></span>
                            <input
                              type="text"
                              class="form-control"
                              name="type"
                              id="basic-icon-default-fullname"
                              placeholder="John Doe"
                            
                            />
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
                        <th>username</th>
                        <th>password</th>
                        <th>type</th>
                        <th>Mod/Sup</th>

                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php 



                                 if(isset($type)){
                                  $list=admin::listAdmins_type($type);
                                 }else{
                                  $list=admin::listeA();
                                 }
                                  
                                    foreach ($list as $admin) {
                                    ?>                  
                                                      <tr>
                                                      <td><?=$admin->username?></td>
                                                        <td><?=$admin->password?></td>
                                                        <td><?=$admin->type?></td>
                                                        
                                                        <td>                                  <a href="modifyAdmin.php?username=<?=$admin->username?>" >  <i class="bx bx-edit" style="color: black;" width="602" height="25"></i></a>
                                                        <a href="./PHP/classe/Sadmin.php?username=<?=$admin->username?>" onclick="return confirm('Are you sure you want to delete this item?');" >       <i class="bx bx-trash" style="color: red;" width="602" height="25"></i> 
                                                        </td>
                                                      </tr>
                                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
                        </div>
</html>
