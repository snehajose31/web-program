<html>
<head>
<title>document</title>
</head>
<body>
<?php
$c=array("Adarsh","Kohli","Sachin","Dhoni","Ryaina","Aswin");
echo"<table border='1' width='90'><tr><th>cricketer</th></tr>";
foreach($c as $i){
	echo"<tr><td>$i</td></tr>";
}
echo "<table>";
?>
</body>
</html>