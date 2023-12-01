<?php 

require_once("../conexao_login.php");

$id = $_POST['id_dados_pessoais'];

$res = $pdo->prepare("DELETE FROM dados_pessoais where id = :id ");

$res->bindValue(":id", $id);

$res->execute();

?>