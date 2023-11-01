<?php
require("shared/config.php");
include("shared/_navbar.php");

?>
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
                  <h4 class="card-title mb-3 text-white">Tester_Form</h4>                    
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1" pattern="^[a-z A-Z]{3,}$" class="text-white">Tester Name</label>
                        <input type="text" required style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputName1" name="Tester_Name" placeholder="Tester Name">
                      </div>
                    
                      <button type="submit" name="submit" class="btn btn-gradient-primary m-auto d-flex">Submit</button>
                    </form>
                    <?php



if(isset($_POST['submit']))
{

  $name = $_POST['Tester_Name'];
  
  if(
    preg_match("/^[a-z A-Z .]{3,}$/", $name))
   {
  $insert = "INSERT INTO `testingtype`(`testing_name`)
   VALUES ('$name')";
  $run = mysqli_query($conn, $insert);

  if($run) {
    echo "<script>alert('Your Tester Type Has Been Inserted!');
    window.location.href='testertypedisplay.php'</script>";
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