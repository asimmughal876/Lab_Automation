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
              <h3 class="page-title text-white"> Product Form </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                </ol>
              </nav>
            </div>
              <div class="col-12 grid-margin stretch-card">
                <div class="card" style="box-shadow:1px 1px 18px 7px  rgb(0, 37, 117);background: black; color:white !important;">
                  <div class="card-body">
                  <h4 class="card-title mb-3 text-white">Product_Form</h4>                    
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1" class="text-white">Product Name</label>
                        <input type="text" pattern="^[a-z A-Z]{3,}$" required style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputName1" name="Prod_Name" placeholder="Product Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1" class="text-white">Product Details</label>
                        <input type="text" pattern="^[a-z A-Z]{8,}$" required style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputCity1" name="Prod_Details" placeholder="Product Details">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1" class="text-white">Product Image</label>
                        <input type="file" required style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputCity1" name="Prod_Image" placeholder="Product Image">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1" class="text-white">Product Price</label>
                        <input type="text" pattern="^[$ 0-9]{1,}$" required style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputCity1" name="Prod_Price" placeholder="Product Price">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputCity1" class="text-white">Product Quantity</label>
                        <input type="text" pattern="^[0-9]{1,}$" required style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputCity1" name="Prod_Quantity" placeholder="Product Quantity">
                      </div>
                
                    
                      <button type="submit" name="submit" class="btn btn-gradient-primary m-auto d-flex mb-3">Submit</button>
                    </form>
                    
                    <?php


if(isset($_POST['submit']))
{
    $name = $_POST['Prod_Name'];
    $details = $_POST['Prod_Details'];
    $imgname = $_FILES['Prod_Image']['name'];
    $imgpath= $_FILES['Prod_Image']['tmp_name'];
    $folder = "assets/images/". $imgname;
    move_uploaded_file($imgpath,$folder);
    $price = $_POST['Prod_Price'];
    $quantity = $_POST['Prod_Quantity'];
    $insertt = "INSERT INTO `products`(`prod_name`, `prod_desc`, `prod_price`, `prod_image`, `prod_qty`)
     VALUES ('$name','$details','$price','$imgname','$quantity')";
    $run = mysqli_query($conn, $insertt);
    echo "<script>alert('Your Product Has Been Inserted!');
    window.location.href='pro_display.php'</script>";
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