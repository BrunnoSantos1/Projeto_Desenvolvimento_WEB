<?php 

require_once("../conexao_login.php");

$id = $_POST['id'];

$res = $pdo->prepare("DELETE FROM funcionarios where id = :id ");

$res->bindValue(":id", $id);

$res->execute();

?>