<?php
require("shared/config.php");

$deletewalarecord = $_GET ['deleteid'];
$qureyy = "DELETE FROM `testingtype` WHERE `testing_id` = '$deletewalarecord'";
$result = mysqli_query($conn,$qureyy);

if($result)
{
    header("location:testertypedisplay.php");
}

?>