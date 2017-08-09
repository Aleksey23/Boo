<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">

<title>Homework</title>


</head>
<body>

<?php
$year = $_GET["year"];
switch($year){
case 1:$year % 4 == 0;
case 2:$year % 400 == 0;
case 3: $year == 2000;
	echo"Год високосный";
case 4:$year % 100 == 0;
case 5:$year % 4 != 0;
	echo"Год не високосный";
break;
}

?>
 
</body>
</html>