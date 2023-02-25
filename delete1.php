<?php
include 'prj1.php';
$del=$_GET["srs"];
echo $del;
$r=mysqli_query($con,"DELETE FROM `class1` WHERE sno=$del");
header("location:view1.php");

?>