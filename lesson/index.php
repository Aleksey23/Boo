<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Example</title>
<link rel = "stylesheet" href = "styles.css">
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
		var_dump($users);//выводит массив на экран
		$fakeuser = new User();
		$fakeuser -> id = 1;
		$fakeuser -> name = "Bob";
		$fakeuser -> login = "Bob23";
		$fakeuser -> password = "123";
		$fakeuser -> bdate = "111111";
		$fakeuser -> phone = "1354351";
		$fakeuser -> city = "NY";
		$fakeuser -> ismale = 1;
		$fakeuser -> email = "lh@kl";
		$fakeuser -> draw();//вызов для отображения пользователя на экран

?>

</body>
</html>