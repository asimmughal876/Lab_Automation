<?php
require("shared/config.php");

$deletewalarecord = $_GET ['deleteid'];
$qureyy = "DELETE FROM `tester` WHERE `tester_id` = '$deletewalarecord'";
$result = mysqli_query($conn,$qureyy);

if($result)
{
    header("location:tester_display.php");
}

?>