<?php

$pets = array("Cat","Dog","Elc","Cow");
echo "Sorce array:";
var_dump($pets);//выведем инфу из  массива на экран
$pets[3] = "Fish";//поменяем элементы
echo " New sorce array:";
var_dump($pets);
//добавим в массив
array_push($pets,"Snake");
echo "  input sorce array:";
var_dump($pets);


$i = 0;
while($i < count($pets)){//колличество count
echo"<b>".$pets[$i]."</b></br>";
$i++;
}


$i = 0;
do{
echo"<b><i>".$pets[$i]."</i></b></br>";
$i++;
}
while ($i < count($pets));





for ($i = 0; $i < count($pets); $i++)
{
	echo"<i>".$pets[$i]."</i></br>";
}

foreach($pets as $pet)
{
	echo"<h3>".$pet."</h3></br>";
}


//удаляем элемент
unset($pets[2]);
echo "delete sorce array:";
var_dump($pets);





$n = 10;
$r = 1;
for($i= 0; $i<$n;$i++ )
	{$r*=2;
	}
		echo "$r";




		

?>

