<?php
require("shared/config.php");
include("shared/_navbar.php");
$approveId = $_GET['approve'];
$displayproduct="UPDATE `products` SET `prod_status`='4' WHERE prod_id = '$approveId'";
$result = mysqli_query($conn, $displayproduct);

$tested="UPDATE `testedproducts` SET `tested_comment`='Test Pass' WHERE tested_prod_id = '$approveId'";
$r = mysqli_query($conn, $tested);
if($r)
{
    echo "<script>window.location.href='product_approve.php'</script>";
}
?>
             