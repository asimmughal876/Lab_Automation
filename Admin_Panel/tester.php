<?php
require("shared/config.php");
include("shared/_navbar.php");

?><style>
option
{
color:black;
}
</style>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <?php
             include("shared/_sidebar.php");
         ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper" style="background-color:black;">
            <div class="page-header">
              <h3 class="page-title text-white"> Tester Form </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                </ol>
              </nav>
            </div>
              <div class="col-12 grid-margin stretch-card">
                <div class="card" style="box-shadow:1px 1px 18px 7px  rgb(0, 37, 117);background: black">
                  <div class="card-body">
                  <h4 class="card-title mb-3 text-white">Register_Form</h4>                    
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1" class="text-white">Tester Name</label>
                        <input type="text" pattern="^[a-z A-Z]{3,}$" required style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputName1" name="test_name" placeholder="Tester Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1" class="text-white">Tester Email</label>
                        <input type="text" pattern="^[a-zA-Z](\.?[a-z0-9]){2,}@g(oogle)?mail\.com$" required style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputName1" name="test_email" placeholder="Tester Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1" class="text-white">Tester Password</label>
                        <input type="password" pattern="^[a-z A-Z 0-9]{3,}$" required style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputCity1" name="test_pass" placeholder="Tester Password">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputCity1" class="text-white">Tester Description</label>
                        <input type="text" pattern="^[a-z A-Z]{3,}$" required style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputCity1" name="test_desc" placeholder="Tester Password">
                      </div>
                    
                      <button type="submit" name="submit" class="btn btn-gradient-primary m-auto d-flex">Submit</button>
                    </form>
                    <?php



if(isset($_POST['submit']))
{

  $a = $_POST['test_name'];
  $b = $_POST['test_email'];
  $c = $_POST['test_pass'];
  $d = $_POST['test_desc'];


  
  $insert = "INSERT INTO `tester`(`tester_name`, `tester_email`, `tester_password`, `tester_description`)
   VALUES ('$a','$b','$c','$d')";
  $run = mysqli_query($conn, $insert);
 
  if($run) {
    echo "<script>alert('Your Tester Has Been Inserted!');
    window.location.href='tester_display.php'</script>";
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

