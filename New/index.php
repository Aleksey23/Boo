<?php
require_once 'core.php';
$login = $_POST["login"];
$password = $_POST["pass"];//pass название переменной
	$pdo = createPDO();//все переменные
//то что хотим дальше сделать
		$db = $pdo -> prepare ("SELECT*FROM users WHERE login = ? and password = ?");//подготавливает 
		$db -> bindParam(1,$login);
		$db -> bindParam(2,$password);
		//то что хотим сделать
		$db -> execute();//выполнение
		$users = $db -> fetchAll();
		if(count ($users)==0){
			echo"Неверный логин или пароль";// можно через эчо вывести простую строку
		}

			else{
				var_dump($users[0]);//в результате он первый 
			}
?>