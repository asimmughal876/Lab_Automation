<?php
require("shared/config.php");
include("shared/_navbar.php");


?>
  

      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <?php
             include("shared/_sidebar.php");
         ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper" style="background-color:black;">
            <div class="page-header">
              <h3 class="page-title text-white"> Register Form </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                </ol>
              </nav>
            </div>

                <div class="col-12 m-auto mb-5 mt-5" style="box-shadow:1px 1px 18px 7px  rgb(0, 37, 117);background: black;">
                  <div class="card-body">
                  <h2 class="card-title mb-3 text-white text-center">Register Admin</h2>                    
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <input type="text" required style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputName1" name="User_Name" placeholder="Admin Name">
                      </div>
                      <div class="form-group">
                        <input type="email" required style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputName1" name="User_Email" placeholder="Admin Email">
                      </div>
                      <div class="form-group">
                        <input type="text" required style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputName1" name="User_Pass" placeholder="Admin Password">
                      </div>
                    
                      <button type="submit" name="submit" class="btn btn-gradient-primary m-auto d-flex mb-3">Submit</button>
                    </form>
                    <?php

if(isset($_POST['submit']))
{

  $a = $_POST['User_Name'];
  $b = $_POST['User_Email'];
  $c = $_POST['User_Pass'];
  
  
  if(
    preg_match("/^[a-z A-Z]{3,}$/", $a) && preg_match("/^[a-zA-Z](\.?[a-z0-9]){2,}@g(oogle)?mail\.com$/", $b) &&
    preg_match("/^[a-z A-Z 0-9]{3,}$/", $c)
    ){
  
  $insert = "INSERT INTO `admin`(`admin_name`, `admin_email`, `admin_password`) 
  VALUES ('$a','$b','$c')";
  $run = mysqli_query($conn, $insert);

  if($run)
  {
    echo "<script>alert('Admin has been Registerd!')
    window.location.href='admin_display.php'</script>";
  }
}
else {
  echo "<h2 class='text-center fw-bold text-white'>Not Valid Info!</h2>";
}
}
?>
                      </div>
                </div>
              </div>
          </div>
        </div>
      </div>

          <?php
          include("shared/_footer.php");
          ?>

                   
