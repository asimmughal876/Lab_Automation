<?php
require("shared/config.php");
include("shared/_navbar.php");
$updateId = $_GET['assingId'];
$selectt = "SELECT * FROM `products` WHERE `prod_id` = '$updateId'";
$result = mysqli_query($conn, $selectt);
$record = mysqli_fetch_assoc($result);
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
              <h3 class="page-title text-white"> Product Assign Form </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                </ol>
              </nav>
            </div>
              <div class="col-12 grid-margin stretch-card">
                <div class="card" style="box-shadow:1px 1px 18px 7px  rgb(0, 37, 117);background: black">
                  <div class="card-body">
                    <h4 class="card-title text-white">Product form</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="text-white" for="exampleInputUsername1">Product Name</label>
                        <input type="text" style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputUsername1" value="<?php echo $record['prod_name']?>" name="pro_name" placeholder="Product Name">
                      </div>
                      <div class="form-group">
                        <label class="text-white" for="exampleInputEmail1">Product Description</label>
                        <input type="text" style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputEmail1" value="<?php echo $record['prod_desc']?>" name="pro_details" placeholder="Product Description">
                      </div>
                      <div class="form-group">
                        <label class="text-white" for="exampleInputEmail1">Product Quantity</label>
                        <input type="text" style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputEmail1" value="<?php echo $record['prod_qty']?>" name="pro_quantity" placeholder="Product Description">
                      </div>
                      <div class="form-group">
                        <label class="text-white d-block" for="exampleInputPassword1">Product Image</label>
                        <img class="w-50 m-auto d-flex" src="assets/images/<?php echo $record['prod_image']?>" alt="">
                        <input type="file" style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputPassword1" name="pro_image" placeholder="Product Image">
                        <h3 class="text-danger mt-1">Must select Image</h2>
                      </div>
                      <div class="form-group">
                        <label class="text-white" for="exampleInputConfirmPassword1">Product Price</label>
                        <input type="text" style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white" id="exampleInputConfirmPassword1" value="<?php echo $record['prod_price']?>" name="pro_price" placeholder="Product Price">
                      </div>
                      <div class="form-group">
                      <label for="exampleInputName1" class="text-white">Tester Name</label>
                      <select name="tester" style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white form-control-sm" id="exampleInputName1">
                        <?php
                        $query = "SELECT * FROM `tester`";
                        $run2 = mysqli_query($conn,$query);
                        while($data = mysqli_fetch_assoc($run2))
                        {
                        ?>
                        <option value="<?php echo $data['tester_id'] ?>" ><?php echo $data['tester_name'] ?></option>
                      <?php
                        }
                      ?>
                      
                      </select>
                      </div>

                      <div class="form-group">
                      <label for="exampleInputName1" class="text-white">Tester Name</label>
                      <select name="test" style="background: linear-gradient(rgb(0, 14, 34), rgb(0, 37, 117)); border:none; border-radius:8px;" class="form-control text-white form-control-sm" id="exampleInputName1">
                        <?php
                        $query = "SELECT * FROM `testingtype`";
                        $run2 = mysqli_query($conn,$query);
                        while($data = mysqli_fetch_assoc($run2))
                        {
                        ?>
                        <option value="<?php echo $data['testing_id'] ?>" ><?php echo $data['testing_name'] ?></option>
                      <?php
                        }
                      ?>
                      
                      </select>
                      </div>
                      
                      
                      <button name="submit" type="submit" class="btn btn-gradient-primary d-flex m-auto">Submit</button>
                    </form>
                    <?php
                    
                    if(isset($_POST['submit']))
                    {
                    $name=$_POST['pro_name'];
                    $details=$_POST['pro_details'];
                    $price=$_POST['pro_price'];
                    $qty=$_POST['pro_quantity'];
                    $file=$_FILES['pro_image']['name'];
                    $filetemp=$_FILES['pro_image']['tmp_name'];
                    $filesize=$_FILES['pro_image']['size'];
                    $filetype=$_FILES['pro_image']['type'];
                    $folder="assets/images/";
                    if(is_uploaded_file($_FILES['pro_image']['tmp_name']))
                    {
                    if($filetype=="image/jpeg" || $filetype=="image/jpg" || $filetype=="image/png")
                    {
                      if($filesize<=1000000)  
                      {
                       $path=$folder.$file;
                       $queryy ="UPDATE `products` SET `prod_name`='$name',`prod_desc`='$details',`prod_price`='$price',
                       `prod_image`='$file',`prod_qty`='$qty',`prod_status`='2' WHERE `Prod_Id` = '$updateId'";
                       move_uploaded_file($filetemp,$path);
                       $run=mysqli_query($conn,$queryy);
                      }
                      else 
                      {
                          echo "Size Error";
                      }
                    }
                    else 
                    {
                        echo "Filetype Not Correct";
                    }
                    }
                    else
                    {
                       $queryy = "UPDATE `products` SET `prod_name`='$name',`prod_desc`='$details',`prod_price`='$price',
                       `prod_image`='$file',`prod_qty`='$qty',`prod_status`='2' WHERE `Prod_Id` = '$updateId'";
                       $run=mysqli_query($conn,$queryy);
                    }
                    }
                    
                    if(isset($_POST['submit']))
                    {
                    $tester=$_POST['tester'];
                    $test=$_POST['test'];
                    
                    $q = "INSERT INTO `testedproducts`(`tested_prod_id`, `tested_tester_id`, `tested_testing_type` , `tested_comment`)
                     VALUES ('$updateId','$tester','$test', 'Test Pending...')";

                     $result = mysqli_query($conn, $q);
                    
                     if($result)
                     {
                      echo "<script>alert('Product has Been Assign')</script>";
                      echo "<script>window.location.href='assign_product.php'</script>";
                     }
                    
                     else
                    {
                      echo "<script>alert('error')</script>";
                    }
                    }
                    
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- content-wrapper ends -->
          <?php
         include("shared/_footer.php");
          ?>