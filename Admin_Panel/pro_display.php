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
                <h3 class="page-title text-white"> Product Display Form </h3>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card" style="box-shadow:1px 1px 18px 7px  rgb(0, 37, 117);background: black">
                    <div class="card-body">
                        <h4 class="card-title mb-3 text-white">Product_Table</h4>
                        <table class="table text-white">
                            <thead>
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Details</th>
                                    <th scope="col">Product Image</th>
                                    <th scope="col">Product Price</th>
                                    <th scope="col">Product Quantity</th>
                                    <th scope="col">Assign</th>
                                    <th scope="col">Delete</th>
                                    <th scope="col">Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php 
                                $query ="SELECT * FROM `products`  Where prod_status='0'";
                                $run = mysqli_query($conn, $query);
                                while ($data = mysqli_fetch_assoc($run))
                                {
                                
                                ?>
                                <tr>
                                    <td><?php echo $data['prod_name']?></td>
                                    <td style="white-space: pre-line;"><?php echo $data['prod_desc']?></td>
                                    <td><img src="assets/images/<?php echo $data['prod_image']?>"></td>    
                                    <td><?php echo $data['prod_price']?></td>
                                    <td><?php echo $data['prod_qty']?></td>
                                 <td>
                                 <a href="pro_assign.php?assingId=<?php echo $data['prod_id']?>" class="btn btn-success">Assign</a>
                                 </td>
                                 <td>
                                 <a href="pro_del.php?deleteId=<?php echo $data['prod_id']?>" class="btn btn-danger">Delete</a>
                                 </td>
                                 <td>
                                 <a href="pro_update.php?updateId=<?php echo $data['prod_id']?>" class="btn btn-success">Update</a>
                                 </td>
                                </tr>
                                
                        <?php
                            }
                        ?>
                             
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("shared/_footer.php");
?>