<html> 
<head> 
<title>Electricity bill</title> 
<style > 
b{ color: 
red; } 
</style> 
</head> 
<body> 
<h1>Electricity bill</h1> 
<form method="post" action="#"> 
<center> 
<table border="1px"> 
<tr> 
<th>Number of Unit Used:</th> 
<td><input type="text" name="units"></td> 
</tr> 
<tr> 
<th></th> 
<td align="center"><input type="submit" name="submit" value="Calculate Bill"></td> 
</tr> 
</table> 
</center> 
</form> 
<?php 
$r; 
if(isset($_POST["submit"])) 
{ 
$u=$_POST["units"]; 
$s=rate($u); 
echo "Total Charge for ",$u," Units of Electricity = <b>".$s." Rupees. </b>"; 
} 
function rate($u) 
{ 
if($u<=50) 
{ 
$r=$u*3.50
; return $r; 
} 
else if($u>50 && $u<=150) 
{ 
$t=50*3.50; 
$u=$u-50; 
$r=$t+$u*4; 
return $r; 
} 
else if($u>150 && $u<=250) 
{ 
$t=50*3.50+100*4; 
$u=$u-150; 
$r=$t+$u*5.20
; return $r; } 
else if($u>=250) 
{ 
$t=50*3.50+100*4+100*5.20; 
$u=$u-250; 
$r=$t+$u*6; 
return $r; 
} 
} 
?> 
</body> 
</html>