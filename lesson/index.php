<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Example</title>
<link rel = "stylesheet" href = "styles.css">
<script src = "jquery-3.2.1.min.js">
</script>
<script src = "main.js"></script>

</head>
<body>





<?php
require_once 'users.php';
require_once 'core.php';//подключение других файлов
/*echo NAME;//если обявлено через define то кавычки не ставятся
echo PASSWORD;
 */

	$pdo = createPDO();//создали обьект подключения к базе данных
	$db = $pdo->prepare('SELECT*FROM users');//возвращает обьект запроса который указываем prepare принимает строку *-все поля users название таблицы
		$db->execute();//выполнить запрос аписывает в массив к скольки строкам обратились
		$users = $db->fetchAll();//возвращает массив данных выборки
		//var_dump($users);//выводит массив на экран
		foreach($users as $user){
			$man = new User();
			$man->id = $user["id"];//обратится к классу в [] название столбца 
			$man->name = $user["name"];
			$man->login = $user["login"];
			$man->password = $user["password"];
			$man->bdate = $user["bdate"];
			$man->phone = $user["phone"];
			$man->city = $user["city"];
			$man->ismale = $user["ismale"];
			$man->email = $user["email"];
			$man->draw();
		}
		/*$fakeuser = new User();
		$fakeuser -> id = 1;
		$fakeuser -> name = "Bob";
		$fakeuser -> login = "Bob23";
		$fakeuser -> password = "123";
		$fakeuser -> bdate = "111111";
		$fakeuser -> phone = "1354351";
		$fakeuser -> city = "NY";
		$fakeuser -> ismale = 1;
		$fakeuser -> email = "lh@kl";
		$fakeuser -> draw();//вызов для отображения пользователя на экран*/

?>

</body>
</html>