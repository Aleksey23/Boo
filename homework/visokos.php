<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">

<title>Homework</title>


</head>
<body>

<?php
$year =$_GET["year"];
if($year % 4 == 0 || $year % 400 == 0 ){
	echo"Год високосный";
}
else if($year % 100 == 0 || $year % 4 != 0){
	echo"Год не високосный";
}


?>
 
</body>
</html>