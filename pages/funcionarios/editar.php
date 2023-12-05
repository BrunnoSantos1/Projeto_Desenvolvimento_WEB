<?php 
//DADOS DE FUNCINARIOS
require_once("../conexao_login.php");

$nome   = $_POST['nome'];
$cpf    = $_POST['cpf'];
$cargo  = $_POST['cargo'];

$id = $_POST['id'];

$res = $pdo->prepare("UPDATE funcionarios SET 
                        nome      = :nome
                        cargo     = :cargo 
                        WHERE id = :id ");

$res->bindValue(":nome", $nome);
$res->bindValue(":cargo", $cargo);

$res->bindValue(":id", $id);

$res->execute();


echo "Editado com Sucesso!!";


?>