<html>
<body>
<?php
echo "default order"."<br>";
$s=array("don","sam","anu","sinu","jinu");
print_r($s);
asort($s);
echo "<br><br>"."ascending order"."<br><br>";
print_r($s);
arsort($s);
echo "<br><br>"."descending order"."<br><br>";
print_r($s);
?>
</body>
</html>