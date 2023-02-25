<html>
<head></head>
<body>
<center>
<h1>registration</h1>
<form action='#' method="POST" enctype="multipart/form-data">
<table>
<tr>
<td><label>Name</label></td>
<td><input type="text" name="a1"></td>
</tr>
<tr>
<td><label>address</label></td>
<td><textarea area ="2" name="a2"></textarea></td>
</tr>
<tr>
<td><label>phone</label></td>
<td><input type="text" name="a3"></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td>
</tr>
</form>
<?php
include 'dbconnect.php';
if(isset($_POST["submit"]))
{ 
$name=$_POST["a1"];
$address=$_POST["a2"];
$phone=$_POST["a3"];
$sql="INSERT INTO `class1`( `sname`, `sadd`, `sphone`) VALUES ('$name','$address','$phone')";
$result=mysqli_query($con,$sql);
if($result==1)
{
	move_uploaded_file($_FILES["a4"]["tmp_name"],"uploads/".$_FILES["a4"]["name"]);
	header("location:view1.php");
	echo "hai";
}
}
?>
</body>
</center>
</html>