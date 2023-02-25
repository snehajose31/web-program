<?php
include"dbconnect.php";
?>
<html>
<body>
<center>
<a href="prj.php">register</a>
<table border="1" >
<tr>
<td>ID</td>
<td>NAME</td>
<td>ADDRESS</td>
<td>PHONE</td>
<td>img</td>
<td>EDIT</td>
<td>DELETE</td>
</tr>
<?php
$result=mysqli_query ($con,"SELECT * FROM `class1`");
//print_r($result);
while($row=mysqli_fetch_array($result))
{?>

<tr>
<td><?php echo $row["sno"]; ?></td>
<td><?php echo $row["sname"]; ?></td>
<td><?php echo $row["sadd"]; ?></td>
<td><?php echo $row["sphone"]; ?></td>
<td><a href="edit.php?nss=<?php echo $row['sno'];?>">update</a>
<td><a href="delete1.php?srs=<?php echo $row['sno'];?>"> remove </a></td>
</tr>
<?php
}

?>
</table>
<a href="prj1.php">go back</a>
</center>
</body>
</html>