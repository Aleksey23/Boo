<?php
require_once "core.php";
$action = $_POST["action"];

switch($action) {
	case "delete":
		$id = $_POST["id"];
		$pdo = createPDO();
		$db = $pdo->prepare('DELETE FROM users WHERE id = ?');
		$db->bindParam(1,$id);//ПРИНИМАЕТ 2 аргумента 1ый номер ? 
		$db->execute();
		break;
}

echo "OK";

?>