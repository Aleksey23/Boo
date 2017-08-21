<?php

define('HOST', 'localhost');
define('NAME', 'user2');
define('PASSWORD','123456');
define('db_name','boo_db');

function createPDO(){//класс с готовыми функциями
	$pdo = new PDO("mysql:host=".HOST.";dbname=".db_name,NAME,PASSWORD);//это гуглится ,точка склеивает строки
	return $pdo;


}


?>