<?php
require("shared/config.php");

$deletewalarecord = $_GET ['deleteid'];
$qureyy = "DELETE FROM `contact` WHERE `cont_id` = '$deletewalarecord'";
$result = mysqli_query($conn,$qureyy);

if($result)
{
    header("location:user_mess.php");
}

?>