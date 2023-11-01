<?php
require("shared/config.php");

$deletewalarecord = $_GET ['deleteId'];
$qureyy = "DELETE FROM `admin` WHERE `admin_id` = '$deletewalarecord'";
$result = mysqli_query($conn,$qureyy);

if($result)
{
    header("location:admin_display.php");
}

?>