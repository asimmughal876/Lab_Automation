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
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card" style="box-shadow:1px 1px 18px 7px  rgb(0, 37, 117);background: black">
                    <div class="card-body">
                        <h4 class="card-title mb-3 text-white">Product_Table</h4>
                        <?php

if(isset($_POST['submit-search']))
{
    $search = mysqli_real_escape_string($conn , $_POST['search']);
    $sql = "SELECT * FROM `products` JOIN `testedproducts` ON products.prod_id = testedproducts.tested_prod_id 
    Join `tester` on tester.tester_id = testedproducts.tested_tester_id WHERE prod_name LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);

    if($row > 0)
    {

     echo"<table class='table text-white'>
     <thead>
         <tr>
             <th scope='col'>Product Name</th>
             <th scope='col'>Product Details</th>
             <th scope='col'>Product Image</th>
             <th scope='col'>Product Price</th>
             <th scope='col'>Product Quantity</th>
             <th scope='col'>Tester Comment</th>
         </tr>
     </thead>
     <tbody>";
     while($data = mysqli_fetch_assoc($result))
     {
        echo"
         <tr>
             <td> ".$data['prod_name']."</td>
             <td style='white-space: pre-line;'>".$data['prod_desc']."</td>
          <td><img src='assets/images/" . $data['prod_image'] . "'></td>  
             <td> ".$data['prod_price']."</td>
             <td> ".$data['prod_qty']."</td>
             <td> ".$data['tested_comment']."</td>
          <td>
         </tr>";
     }   
    
    echo "</tbody>
 </table>";   
    }
    else
    {
        echo"<h4 class='card-title mb-3 text-danger text-center'>No Match Found</h4>";
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