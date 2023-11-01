<?php
require("shared/config.php");
include("shared/_navbar.php");
$disapproveId = $_GET['disapprove'];
$displayproduct="UPDATE `products` SET `prod_status`='0' WHERE prod_id = '$disapproveId'";
$result = mysqli_query($conn, $displayproduct);

$tested="UPDATE `testedproducts` SET `tested_comment`='Test Failed' WHERE tested_prod_id = '$disapproveId'";
$r = mysqli_query($conn, $tested);
if($r)
{
    echo "<script>window.location.href='product.php'</script>";
}
?>
             