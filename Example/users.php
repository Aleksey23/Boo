<?php

require_once "core.php";//подключили один файл в другой
$pdo = createPDO();
$db = $pdo -> prepare("INSERT INTO clients(email,city,password,datebirth) VALUES(?,?,?,?)");//id заполняется автоматически, values- вместо них реальные значения будем подставлять
$email = $_POST["email"];//вытаскивание переменной из пост запроса
$city = $_POST["city"];
$pass = $_POST["pass"];
$date = $_POST["date"];
$date = date("Y-m-d", strtotime($date));
$db -> bindParam(1,$email);//если есть вопросики первый вопросик  1 заменяем на email
$db -> bindParam(2,$city);
$db -> bindParam(3,$pass);
$db -> bindParam(4,$date);
$db -> execute();//эта функция отправляет запрос препаре в базу на выполнение
?>