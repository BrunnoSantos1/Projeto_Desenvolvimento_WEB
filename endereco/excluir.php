<?php 

require_once("../conexao_login.php");

$id = $_POST['id_endereco'];

$res = $pdo->prepare("DELETE FROM endereco where id = :id ");

$res->bindValue(":id", $id);

$res->execute();

?>