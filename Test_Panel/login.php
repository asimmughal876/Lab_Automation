<?php
require("shared/config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>

  <body>
    <div class="container-scroller" >
     
   

      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
   
        <!-- partial -->
        <div class="main-panel" style="width: calc(100% - -156px); min-height: calc(146vh - 254px);">
          <div class="content-wrapper" style="background-color:black;">
            <div class="page-header">
              <h3 class="page-title text-white mt-5">  </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                </ol>
              </nav>
            </div>
              <div class="col-7 m-auto mt-5">
                <div class="card" style="box-shadow:1px 1px 18px 7px  rgb(0, 37, 117);background: black; color:white !important;">
                  <div class="card-body">
                  <h4 class="card-title mb-3 text-white">Login_Form</h4>                    
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="email" style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;"
             class="form-control text-white" id="exampleInputName1" name="User_Email" placeholder="User Email">
          </div>
          <div class="form-group">
            <input type="password"  style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none;
             border-radius:8px;" class="form-control text-white" id="exampleInputCity1" name="User_Pass" placeholder="User Password">
          </div>

          <button type="submit" name="submit" class="btn-gradient-primary m-auto d-flex mb-3 p-2 px-4 rounded-pill">Submit</button>
        </form>
        <?php


if(isset($_POST['submit']))
{

  $email = $_POST['User_Email'];
  $pass = $_POST['User_Pass'];
  
  
  $query = "SELECT * FROM `tester` WHERE tester_email = '$email' AND tester_password = '$pass'";
  $run = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($run);
  
  if(mysqli_num_rows($run)>0)
  {
  $_SESSION['User_Id'] = $row['tester_id'];
  $_SESSION['User_Name'] = $row['tester_name'];
  $_SESSION['User_Email'] = $row['tester_email'];
  $_SESSION['User_Pass'] = $row['tester_password'];
  echo "<script>window.location.href='index.php'</script>";
  }

  else
  {
    echo "<h3 class='text-center text-white'>Login Denied!</h3>";
  }
}
?>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>