<?php
require("shared/config.php");

$deletewalarecord = $_GET ['deleteId'];
$qureyy = "DELETE FROM `products` WHERE `prod_id` = '$deletewalarecord'";
$result = mysqli_query($conn,$qureyy);

if($result)
{
    header("location:pro_display.php");
}

?>